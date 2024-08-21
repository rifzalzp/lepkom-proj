<?php

namespace App\Http\Controllers;

use App\Models\hasilppdb;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use PHPHtmlParser\Dom;
use Illuminate\Http\Request;

class hasillppdbController extends Controller
{
    public function ambilData()
    {
        // Mendapatkan respons dari URL target
        $response = Http::get('https://hasilppdb.gunadarma.ac.id/berita');

        // Periksa apakah permintaan berhasil
        if ($response->successful()) {
            // Mendapatkan konten HTML dari respons
            $htmlContent = $response->body();

            // Membuat instance Dom Parser
            $dom = new Dom();
            $dom->loadStr($htmlContent);

            // Mendapatkan semua elemen dengan kelas 'post-news'
            $articles = $dom->find('.odd');

            // Loop melalui semua artikel yang ditemukan
            foreach ($articles as $article) {
                // Mendapatkan judul artikel
                $titleElement = $article->find('.sorting_1', 0);
                $nomor = html_entity_decode($nomorElement->text);

                // Mendapatkan tanggal publikasi
                $pendElement = $article->find('.td', 0);
                $noPend = $pendElement->text;

                // Mendapatkan tanggal publikasi
                $namaElement = $article->find('.td', 0);
                $nama = $namaElement->text;

                // Mendapatkan tanggal publikasi
                $dateElement = $article->find('.td', 0);
                $noPend = $dateElement->text;

                // Mendapatkan link artikel
                $link = $titleElement->getAttribute('href');

                // Menghapus karakter tambahan dari tanggal
                $tglPublikasi = str_replace('Pembagian Kampus', '', $tglPublikasi);

                // Cek apakah artikel sudah ada di database berdasarkan judul
                $existingArticle = hasilppdb::where('title', $title)->first();

                // Jika artikel belum ada, simpan ke database
                if (!$existingArticle) {
                    DB::transaction(function () use ($title, $tglPublikasi, $link) {
                        hasilppdb::create([
                            'title' => $title,
                            'tglPublikasi' => $tglPublikasi,
                            'link' => $link,
                        ]);
                    });
                }
            }

            // Ambil semua artikel dari database
            $artikels = hasilppdb::all();

            // Kembalikan hasil dalam bentuk JSON
            return response()->json($artikels);
        } else {
            // Jika permintaan gagal, log pesan kesalahan
            Log::error('Gagal melakukan permintaan ke URL: ' . $response->status());
            return response()->json(['error' => 'Gagal melakukan permintaan'], 500);
        }
    }
}
