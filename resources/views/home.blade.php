<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cari Buku</title>
    @include('partials.scripttw')
</head>
<body class="select-none">
    @include('partials.navbar')
    <div id="info-ppdb" class="hidden absolute mx-8 my-8 bg-white">
        <p>mencoba</p>
    </div>
    <section>
        <div class="aspect-w-16 aspect-h-9 ">
            <video id="video" autoplay="" muted="" loop="" style="disablePictureInPicture: true; object-fit: contain; width: 100%; height: 100%;">
                <source src="videos\Header-Content(1).mp4" type="video/mp4">
                Maaf, browser Anda tidak mendukung tag video.
            </video>
        </div>
    </section>
    <section >
        <div class="container mx-auto">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </section>
    <section>
        <div>
            <div class="w-full py-8">
            </div>
        </div>
    </section>
    <section id="home" class="bg-penus-gedung bg-gray-500 bg-blend-soft-light">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="px-4 mt-8 w-full text-white flex flex-col items-center">
                    <h1 data-theme-toggle="text" class=" md:mb-2 xl:mb-2 font-bold text-2xl md:text-4xl text-center">Sekolah Menengah Kejuruan</h1>
                    <h1 data-theme-toggle="text" class=" md:mb-2 xl:mb-2 font-medium text-2xl md:text-4xl text-center">Plus Pelita Nusantara</h1>
                    <p data-theme-toggle="text" class="mt-6 px-16 items-center text-center max-w-[55%] md:text-xl xl:text-2xl">Menjadi Sekolah Menengah Kejuruan Unggulan yang menghasilkan sumber daya manusia <b>Terampil</b>, <b>Entrepreneur</b>, dan <b>Religius</b>.</p>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2 lg:relative">
                    <div class="mt-10 lg:mt-9 lg:right-0"> 
                        <div class="flex mt-32 md:-mt-4 lg:mt-0" id="tmabhn">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="pt-36 pb-32 dark:bg-dark">
        <div class="container">
            <div class="w-full px-4">
                <svg class="w-5 h-5 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                    <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" .=""></path>
                </svg>
                <blockquote class="flex justify-center text-justify">
                    <ul>
                        <li>
                            <p data-theme-toggle="" class="text-xl text-center italic font-medium text-gray-900">"Successed By Character!</p>
                        </li>
                        <li>
                            <p data-theme-toggle="" class="text-xl text-center italic font-medium text-gray-900">We Are Different!</p>
                        </li>
                        <li>
                            <p data-theme-toggle="" class="text-xl text-center italic font-medium text-gray-900">The Future is Ours!"</p>
                        </li>
                    </ul>
                </blockquote>
                <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                    <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                    <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">SMK Plus Pelita Nusantara</cite>
                    </div>
                </figcaption>
            </div>
        </div>
    </section>
    <!-- Jurusan -->
    <section id="clients" class="pt-24 pb-24 bg-slate-800 dark:bg-slate-300">
        <div class="container">
            <div class="w-full px-4">
                <div class="w-full px-4">
                    <div class="mx-auto text-center mb-5">
                        <h2 class="font-bold text-white text-3xl sm:text-4xl lg:text-5xl dark:text-dark">Mitra Kerjasama</h2>
                    </div>
                    <div class="flex flex-wrap mx-5 md:space-x-5 lg:space-x-0 items-center justify-center grid grid-cols-6 justify-items-center">
                        <a href="#" class="max-w-[135px] py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100">
                            <img src="images\logo\logo_biotrop.png" alt="SEAMEO BIOTROP">
                        </a>
                        <a href="#" class="max-w-[90px] py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100">
                            <img src="images\logo\Logo-B-One-Corp.png" alt="B-One">
                        </a>
                        <a href="#" class="max-w-[120px] py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100">
                            <img src="images\logo\1594112709392_compress_LogoPrimerTelkom.png" alt="Telkom Indonesia">
                        </a>
                        <a href="#" class="max-w-[120px] py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100">
                            <img src="images\logo\LogoBMRI-03.png" alt="Mandiri">
                        </a>
                        <a href="#" class="max-w-[120px] py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100">
                            <img src="images\logo\logo-pintro-dark.svg" alt="Pintro">
                        </a>
                        <a href="#" class="max-w-[120px] py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100">
                            <img src="images\logo\LogoZahirKedua.png" alt="Zahir">
                        </a>
                        <a href="#" class="max-w-[80px] py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100">
                            <img src="images\logo\wikrama-logo.png" alt="SMK Wikrama">
                        </a>
                        <a href="#" class="max-w-[90px] py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100">
                            <img src="images\logo\1677155485871.png" alt="LSPPENUS">
                        </a>
                        <a href="#" class="max-w-[90px] py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100">
                            <img src="images\logo\logo_bnsp.png" alt="BNSP">
                        </a>
                        <a href="#" class="max-w-[80px] py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100">
                            <img src="images\logo\Logo_PENS.png" alt="PENS">
                        </a>
                        <a href="#" class="max-w-[90px] py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100">
                            <img src="images\logo\logojgu.png" alt="JGU">
                        </a>
                        <a href="#" class="max-w-[70px] py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100">
                            <img src="images\logo\logolp3i.png" alt="LP3i">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="jurusan" class="pt-20 pb-32 bg-zinc-500 bg-bottom bg-labmikrotik bg-blend-soft-light">
        <div class="container">
            <div class="w-full px-4">
                <div class="w-full left-0 top-0 pb-12">
                    <div class="w-full text-center text-white text-3xl lg:text-5xl font-bold">Kompetensi Keahlian</div>
                </div>
                <div class="flex flex-wrap space-x-3 lg:space-x-5 mt-8 items-center justify-center">
                    <button id="jurusanbtn" name="jurusanbtn" class="w-20 lg:w-32 py-4 bg-slate-800 transition duration-500 rounded-tl-2xl rounded-tr-2xl text-white font-bold">
                        Multimedia
                    </button>
                    <button id="jurusanbtn" name="jurusanbtn" class="w-20 lg:w-32 py-4 bg-slate-500 transition duration-500 rounded-tl-2xl rounded-tr-2xl text-white font-bold">
                        RPL
                    </button>
                    <button id="jurusanbtn" name="jurusanbtn" class="w-20 lg:w-32 py-4 bg-slate-500 transition duration-500 rounded-tl-2xl rounded-tr-2xl text-white font-bold">
                        TKJ
                    </button>
                    <button id="jurusanbtn" name="jurusanbtn" class="w-20 lg:w-32 py-4 bg-slate-500 transition duration-500 rounded-tl-2xl rounded-tr-2xl text-white font-bold">
                        PKM
                    </button>
                </div>
                <div class="relative bg-slate-800 px-8 py-32 rounded-xl mx-24 pt-24 lg:pt-32 pb-10 lg:pb-20">
                    <div id="mmcard" class="flex flex-col lg:flex-row items-center justify-center lg:space-x-5 space-y-8 lg:space-y-5 transition duration-500 ">
                        <div class="absolute pt-16 top-0 left-0 right-0 m-auto text-center" style="padding-top: 42px;border-bottom-width: 0px;">
                            <p class="text-2xl lg:text-4xl top-30 lg:top-32 text-white font-bold">Multimedia</p>
                        </div>
                        <div class="px-[100px] md:px-[161px] lg:px-24" style="margin-left: 0px;margin-top: 0px;">
                            <img class="max-w-40 max-h-40 lg:max-w-[250px] lg:max-h-[250px]" src="images\mm.png" alt="">
                        </div>
                        <div class="w-full pt-8 lg:pt-0 px-5 lg:px-0 lg:pr-24" style="margin-top: 0px;">   
                            <div class=" text-lg lg:text-2xl text-justify text-white">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis, culpa! Accusamus beatae nisi voluptate. Rem quibusdam voluptatibus iure officia totam soluta earum ipsam nesciunt accusamus. Adipisci quia totam aperiam optio.</p>
                            </div>
                        </div>
                    </div>
                    <div id="rplcard" class="flex flex-col lg:flex-row items-center justify-center lg:space-x-5 space-y-8 lg:space-y-5 transition duration-500 hidden">
                        <div class="absolute pt-16 top-0 left-0 right-0 m-auto text-center" style="padding-top: 42px;border-bottom-width: 0px;">
                            <p class="text-2xl lg:text-4xl top-30 lg:top-32 text-white font-bold">Rekayasa Perangkat Lunak</p>
                        </div>
                        <div class="px-[100px] md:px-[161px] lg:px-24" style="margin-left: 0px;margin-top: 0px;">
                            <img class="max-w-40 max-h-40 lg:max-w-[250px] lg:max-h-[250px]" src="images\rpl.png" alt="">
                        </div>
                        <div class="w-full pt-8 lg:pt-0 px-5 lg:px-0 lg:pr-24" style="margin-top: 0px;">
                            <div class="text-lg lg:text-2xl text-justify text-white">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, eos earum inventore laudantium recusandae perferendis! Quos nemo laborum deleniti. Odio unde exercitationem maxime consequuntur ad iure vitae assumenda.</p>
                            </div>
                        </div>
                    </div>
                    <div id="tkjcard" class="flex flex-col lg:flex-row items-center justify-center lg:space-x-5 space-y-8 lg:space-y-5 transition duration-500 hidden">
                        <div class="absolute pt-16 top-0 left-0 right-0 m-auto text-center" style="padding-top: 42px;border-bottom-width: 0px;">
                            <p class="text-2xl lg:text-4xl top-30 lg:top-32 text-white font-bold">Teknik Komputer Jaringan</p>
                        </div>
                        <div class="px-[161px] lg:px-24" style="margin-left: 0px;margin-top: 0px;">
                            <img class="max-w-40 max-h-40 lg:max-w-[250px] lg:max-h-[250px]" src="images\tkj.png" alt="">
                        </div>
                        <div class="w-full pt-8 lg:pt-0 px-5 lg:px-0 lg:pr-24" style="margin-top: 0px;">
                            <div class="text-lg lg:text-2xl text-justify text-white">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, quidem! Inventore veritatis commodi, consequatur nihil maiores blanditiis numquam tenetur iste fuga voluptatem rem quod ipsa, esse sed natus, dolore mollitia?</p>
                            </div>
                        </div>
                    </div>
                    <div id="pkmcard" class="flex flex-col lg:flex-row items-center justify-center lg:space-x-5 space-y-8 lg:space-y-5 transition duration-500 hidden">
                        <div class="absolute pt-16 top-0 left-0 right-0 m-auto text-center" style="padding-top: 42px;border-bottom-width: 0px;">
                            <p class="text-2xl lg:text-4xl top-30 lg:top-32 text-white font-bold">Perbankan Keuangan Mikro</p>
                        </div>
                        <div class="px-[161px] lg:px-24" style="margin-left: 0px;margin-top: 0px;">
                            <img class="max-w-40 max-h-40 lg:max-w-[250px] lg:max-h-[250px]" src="images\pkm2.png" alt="">
                        </div>
                        <div class="w-full pt-8 lg:pt-0 px-5 lg:px-0 lg:pr-24" style="margin-top: 0px;">
                            <div class="text-lg  lg:text-2xl text-justify text-white">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, at, eius sequi maxime ea temporibus fuga veniam modi harum dolore vel soluta ut, pariatur dolorem possimus beatae atque quaerat est.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="galeri" class="pt-20 pb-32 bg-slate-300">
        <div class="container">
            <div class="w-full px-4">   
                <div class="w-full left-0 top-0 pb-12">
                    <div class="w-full text-center text-white text-3xl lg:text-5xl font-bold">Galeri</div>
                </div>         
                <div class="px-4 lg:px-24">
                    <swiper-container style="cursor: grab" class="mySwiper font-bold" pagination="true" pagination-dynamic-bullets="true" centered-slides="true" space-between="5" slides-per-view="2" autoplay-delay="3500" effect="coverflow" coverflow-effect-depth="100" coverflow-effect-modifier="0.2" coverflow-effect-slide-shadows="false" loop="true">
                        <swiper-slide class="swiper-slide-custom relative">
                            <img class="rounded-lg" src="images\galeri\at_america_album.webp" alt="">
                            <div class="absolute bottom-0 w-full text-center p-8 bg-gradient-to-t from-black to-transparent">
                                <p class="text-white text-lg">@America</p>
                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiper-slide-custom">
                            <img class="rounded-lg" src="images\galeri\duquba_album.webp" alt="">
                            <div class="absolute bottom-0 w-full text-center p-8 bg-gradient-to-t from-black to-transparent">
                                <p class="text-white text-lg">Duquba</p>
                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiper-slide-custom">
                            <img class="rounded-lg" src="images\galeri\Pengukuran Baju PPDB_2024.JPG" alt="">
                            <div class="absolute bottom-0 w-full text-center p-8 bg-gradient-to-t from-black to-transparent">
                                <p class="text-white text-lg">Pengukuran Baju</p>
                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiper-slide-custom">
                            <img class="rounded-lg" src="images\galeri\PPDB_H1_2024.JPG" alt="">
                            <div class="absolute bottom-0 w-full text-center p-8 bg-gradient-to-t from-black to-transparent">
                                <p class="text-white text-lg">Wawancara PPDB 2024</p>
                            </div></swiper-slide>
                        <swiper-slide class="swiper-slide-custom">
                            <img class="rounded-lg" src="images\galeri\Tes Bahasa Inggris PPRD 2024.JPG" alt="">
                            <div class="absolute bottom-0 w-full text-center p-8 bg-gradient-to-t from-black to-transparent">
                                <p class="text-white text-lg">Tes Bahasa Inggris PPRD 2024</p>
                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiper-slide-custom">
                            <img class="rounded-lg" src="images\galeri\turkish_schoolarship_album.webp" alt="">
                            <div class="absolute bottom-0 w-full text-center p-8 bg-gradient-to-t from-black to-transparent">
                                <p class="text-white text-lg">Edutolia Education</p>
                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiper-slide-custom">
                            <img class="rounded-lg" src="images\galeri\preneur's_album.webp" alt="">
                            <div class="absolute bottom-0 w-full text-center p-8 bg-gradient-to-t from-black to-transparent">
                                <p class="text-white text-lg">Preneur's Day</p>
                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiper-slide-custom">
                            <img class="rounded-lg" src="images\galeri\graduation_album.webp" alt="">
                            <div class="absolute bottom-0 w-full text-center p-8 bg-gradient-to-t from-black to-transparent">
                                <p class="text-white text-lg">Graduation</p>
                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiper-slide-custom">
                            <img class="rounded-lg" src="images\galeri\opening_hut_ri_album.webp" alt="">
                            <div class="absolute bottom-0 w-full text-center p-8 bg-gradient-to-t from-black to-transparent">
                                <p class="text-white text-lg">Independence Day</p>
                            </div>
                        </swiper-slide>
                    </swiper-container>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Start -->
    <footer class="bg-gray-800 pt-24 pb-12">
        <div class="container">
            <div class="flex lg:flex-wrap">
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                    <h3 class="font-bold text-2xl mb-2">Lokasi Kami</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.4299329005935!2d106.86209887483123!3d-6.467094293524591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c1d3574a6c97%3A0x43a0aa1056feca8b!2sSMK%20PLUS%20PELITA%20NUSANTARA!5e0!3m2!1sen!2sid!4v1716009003216!5m2!1sen!2sid" width="300" height="250" frameborder="0"></iframe>
                    <p class="mt-3 text-justify w-80">Jl. Golf Rt06/08, Gg. Olahraga No.20, Ciriung,
                        Kecamatan Cibinong, Kabupaten Bogor, Prov.
                        Jawa Barat.</p>
                </div>
                <div class="hidden lg:block w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Kategori Tulisan</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">Programming</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">Teknologi</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">Crytocurrency</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full pl-24 md:pl-56 lg:pl-4 pr-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#home" class="inline-block text-base hover:text-primary mb-3">Beranda</a>
                        </li>
                        <li>
                            <a href="#about" class="inline-block text-base hover:text-primary mb-3">Tentang Saya</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="inline-block text-base hover:text-primary mb-3">Portfolio</a>
                        </li>
                        <li>
                            <a href="#clients" class="inline-block text-base hover:text-primary mb-3">Clients</a>
                        </li>
                        <li>
                            <a href="#blog" class="inline-block text-base hover:text-primary mb-3">Blog</a>
                        </li>
                        <li>
                            <a href="#contact" class="inline-block text-base hover:text-primary mb-3">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full pt-10 border-t border-slate-700">
                <div class="flex items-center justify-center mb-5">
                    <!-- Youtube -->
                    <a href="https://www.youtube.com/@rifzalzandikaputra"
                    target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-400 hover:border-primary hover:bg-primary hover:text-white transition duration-500">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>YouTube</title>
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                    <!-- Instagram -->
                    <a href="https://instagram.com/rfza_al"
                    target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-400 hover:border-primary hover:bg-primary hover:text-white transition duration-500">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram</title>
                            <path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/>
                        </svg>
                    </a>
                    <!-- Twitter -->
                    <a href="https://twitter.com/rfza_al"
                    target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-400 hover:border-primary hover:bg-primary hover:text-white transition duration-500">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>X</title>
                            <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/>
                        </svg>
                    </a>
                    <!-- Github -->
                    <a href="https://github.com/rifzalzp"
                    target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-400 hover:border-primary hover:bg-primary hover:text-white transition duration-500">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>GitHub</title>
                            <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                    </a>
                    <!-- Linkedin -->
                    <a href="https://linkedin.com/in/rifzalzandikaputra"
                    target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-400 hover:border-primary hover:bg-primary hover:text-white transition duration-500">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>LinkedIn</title>
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
                <p class="font-medium text-xs text-slate-500 text-center">© 2024 Project SMK Plus Pelita Nusantara | Designed & Powered by <a href="https://instagram.com/rfza_al" target="_blank" class="font-bold">Rifzal Zandika Putra</a></p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <!-- Back to top Start -->
    <a id="to-top" href="#home" class="fixed justify-center items-center bottom-10 right-10 p-4 z-[9999] h-20 w-16 bg-primary rounded-full opacity-80 hover:scale-105 hover:opacity-100 trasition duration-300 ease-in-out hidden">
        <span class="block w-7 h-7 border-t-[6px] border-r-[6px] -rotate-45 mt-4"></span>
    </a>
    <!-- Back to top End -->
    <script src=".js/script.js"></script>
</body>
</html>