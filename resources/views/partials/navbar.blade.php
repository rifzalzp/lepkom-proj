<nav id="navbar" class="bg-gray-800 fixed top-0 left-0 w-full z-10"> <!-- absolute top-o left-0 w-full flex items-center z-10 -->
    <div class="container">
        <div class="flex items-center justify-between">
            <div class="flex left-0 pl-5">
                <a class="flex space-x-3 my-4 items-center justify-center text-white font-bold h-auto" href="#">
                    <img class="h-12 w-auto" src="images/logo-penus.png" alt="Your Company">
                    <div class="flex-col text-white font-bold">
                        <div>
                            <h1 class="h-5">SMK PLUS </h1>
                        </div>
                        <div>
                            <h1 class="h-5">PELITA NUSANTARA</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="hidden lg:block flex space-x-0 py-7 justify-center " id="bar">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/" class="rounded-md px-8 py-2 text-sm font-medium text-gray-300 hover:text-white" aria-current="page">Dashboard</a>
            <a href="#about" class="rounded-md px-8 py-2 text-sm font-medium text-gray-300 hover:text-white">Motto</a>
            <a href="#" class="rounded-md px-8 py-2 text-sm font-medium text-gray-300 hover:text-white">Kompetensi</a>
            <a href="#galeri" class="rounded-md px-8 py-2 text-sm font-medium text-gray-300 hover:text-white">Galeri</a>
        </div>
        <div class="hidden lg:block flex right-0 pr-5 ">
            <!--<button id="ppdbbtn" name="ppdbbtn" type="button" class="relative rounded-md bg-gray-900 px-8 py-2 text-sm font-medium text-white">
                <p>PPDB</p>
            </button>-->
            <a href="doc\brosur_penus.pdf" download="brosur_penus.pdf" class="rounded-md bg-gray-900 px-8 py-2 text-sm hover:bg-gray-950 font-medium text-white">PPDB</a>
        </div>
        <div class="mr-2 lg:hidden flex">
            <button class="mobile-menu-button ml-auto">
                <svg id="svg" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white">
                     <path fill-rule="evenodd" d="M3 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 5.25zm0 4.5A.75.75 0 013.75 9h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 9.75zm0 4.5a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75zm0 4.5a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        </div>
    </div>
    <div class="mobile-menu lg:hidden flex justify-center relative z-10 animate__animated animate__fadeIn text-white">
        <a data-scroll="scroll" data-theme-toggle="text" href="../#" class="py-2 px-4 text-sm hover:bg-gray-200 hover:text-red-600 font-medium">Home</a>
        <a data-scroll="scroll" data-theme-toggle="text" href="../#about" class="py-2 px-4 text-sm hover:bg-gray-200 hover:text-red-600 font-medium text-red-600">About</a>
        <a data-scroll="scroll" data-theme-toggle="text" href="../#jurusan" class="py-2 px-4 text-sm hover:bg-gray-200 hover:text-red-600 font-medium">Kompetensi</a>
        <a data-scroll="scroll" data-theme-toggle="text" href="../#galeri" class="py-2 px-4 text-sm hover:bg-gray-200 hover:text-red-600 font-medium">Galeri</a>
        <a data-theme-toggle="text" href="./daftarppdb" class=" py-2 px-4 text-sm hover:bg-gray-200 hover:text-red-600 font-medium">PPBD</a>
    </div>
    <div id="marq" class="sticky bg-orange-400">
        <div class="container font-bold text-white">
            <a href="promo">
                <marquee class="unselectable">Pendaftaran Gelombang 1 Telah Di Buka! Kuota Terbatas! Lihat Untuk Selengkapnya!</marquee>
            </a>
        </div>
    </div>
</nav>
