<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<link rel="stylesheet" href="https://rifzalzp.github.io/css/bisacoba.css">
<script>
    tailwind.config = {
        theme: {
        container: {
            center: true,
            padding: '16px',
        },
        extend: {
            colors: {
            primary: '#14b8a6',
            },
            backgroundImage: {
                'penus-gedung': "url('images/Gedung-Belakang2.jpg')",
                'labmikrotik': "url('images/galeri/Lab_Mikrotik.webp')"
            }
        },
        },
    }
</script>
<script src="js/runningtx.js"></script>
<script src="js/script.js"></script>
<script>
    document.addEventListener("contextmenu", function(e){
        e.preventDefault();
    }, false);

    // Popup PPDB
    const ppdbs = document.querySelector('#ppdbbtn');
    const infoppdb = document.querySelector('#nav-menu');

    ppdbs.addEventListener('click', function() {
        ppdbs.classList.toggle('ppdbs-active');
        infoppdb.classList.toggle('hidden');
    });


    // Klik diluar Hamburger
    window.addEventListener('click', function(e) {
        if(e.target != ppdbs && e.target != infoppdb) {
        ppdbs.classList.remove('ppdbs-active');
        infoppdb.classList.add('hidden');
        }
    });

    // Jurusan Button ubah warna
    // Menghapus kelas bg-zinc-300 dari semua button
    
    
    // Menambahkan kelas bg-zinc-300 ke button yang diklik
    
</script>
<!--<script>
    window.onload = () => {
        document.querySelector('#jurusanbtn').addEventListener('click', (e) => {
            jurusanbtn.classList.toggle('bg-slate-800');
            jurusanbtn.classList.toggle('bg-zinc-300');
        });
    };
</script>-->
<script>
    //Navbar fixed
    window.onscroll = function () {
        const header = document.querySelector('#navbar');
        const fixedNav = header.offsetTop;

        if(window.pageYOffset > fixedNav) {
            header.classList.add('navbar-fixed');
        } else {
            header.classList.remove('navbar-fixed');
        }
    };

    // Jurusan Card
    window.onload = () => {
        const buttons = document.querySelectorAll('#jurusanbtn');

        const mmCard = document.getElementById('mmcard');
        const rplCard = document.getElementById('rplcard');
        const tkjCard = document.getElementById('tkjcard');
        const pkmCard = document.getElementById('pkmcard');

        buttons.forEach((button, index) => {
            button.addEventListener('click', () => {
                mmCard.classList.add('hidden');
                rplCard.classList.add('hidden');
                tkjCard.classList.add('hidden');
                pkmCard.classList.add('hidden');

                if (index === 0) {
                    mmCard.classList.remove('hidden');
                } else if (index === 1) {
                    rplCard.classList.remove('hidden');
                } else if (index === 2) {
                    tkjCard.classList.remove('hidden');
                } else if (index === 3) {
                    pkmCard.classList.remove('hidden');
                }

                buttons.forEach(btn => {
                    btn.classList.remove('bg-slate-800');
                    btn.classList.add('bg-slate-500');
                });

                button.classList.remove('bg-slate-500');
                button.classList.add('bg-slate-800');
            });
        });
    };
</script>
<script>
    vid=document.getElementById("video")
    vid.disablePictureInPicture = true
</script>
<style>
    .unselectable {
        user-select: none; /* untuk browser modern */
        -webkit-user-select: none; /* untuk Safari dan Chrome */
        -moz-user-select: none; /* untuk Firefox */
        -ms-user-select: none; /* untuk IE 10+ */
    }
    .video-container {
        width: 100%; /* Atur lebar kontainer sesuai kebutuhan */height: 0;
        padding-top: 70%; /* 16:5 rasio (5/16 = 31.25%) */position: relative;
        overflow: hidden;
    }
    .video-containervideo {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        object-fit: cover; /* Memastikan video menutupi seluruh area kontainer */transform: translate(-50%, -50%); /* Posisikan video di tengah kontainer */
    }
</style>
<style>
    html,
    body {
    position: relative;
    height: 100%;
    }

    body {
    background: #eee;
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
    margin: 0;
    padding: 0;
    }

    .swiper {
    width: 100%;
    height: 100%;
    }

    .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    }
</style>
<style>
    .swiper-slide-custom {
        transition: transform 0.5s ease, opacity 0.5s ease;
    }
    
    .swiper-slide-prev, .swiper-slide-next {
        transform: scale(0.7);
        opacity: 0.5;
    }
    
    .swiper-slide-active {
        transform: scale(1);
        opacity: 1;
    }
</style>
<style>
    
</style>