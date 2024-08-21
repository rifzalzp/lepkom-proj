<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('partials.scripttw')
</head>
<body>
    @include('partials.navbar')
    <section>
        <div>
            <div>
                <h1 class="py-7 text-2xl font-bold text-center">Daftar Nama Siswa Tahun Ajaran 2024/2025</h1>
            </div>
        </div>
        <div class="container mx-auto">
            <table class="table-auto bg-sky-50">
                <thead>
                    <tr>
                        <th class="border border-slate-300 bg-slate-400 py-4">Title</th>
                        <th class="border border-slate-300 bg-slate-400 py-4">TglPublikasi</th>
                        <th class="border border-slate-300 bg-slate-400 py-4">Link</th>
                    </tr>
                </thead>
                @foreach ($baaks as $item)
                <tbody>
                    <tr>
                        <td class="border border-slate-300 text-lime-600 py-2 px-2">{{ $item->title }}</td>
                        <td class="border border-slate-300 text-center py-2 px-2">{{ $item->tglPublikasi }}</td>
                        <td class="border border-slate-300 text-center py-2 px-2 hover:text-amber-400 transition duration-500">
                            <a href="{{ $item->link }}" target="_blank">{{ $item->link }}</a></td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </section>
</body>
</html>