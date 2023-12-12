<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">

</head>
<body>
{{-- ================ NAVBAR ================= --}}

<main class="s-content">
    <nav class="nv-s">
        <header class="nv-h">
            <div class="nv-c">
                <div class="bx-nv-1">
                    <a href="/" class="h-img-logo">
                        <h1 class="fs-nav fw-500">Wisata Tangerang</h1>
                    </a>
                </div>
                <div class="bx-nv-2 ">
                    <div class="w-full h-full hidden-sm">
                        <ul class="w-full h-full flex">
                            <li class="nv-li">
                                <a href="http://localhost/wordpress-lks/" class="nv-a my-auto fs-15">
                                    Home
                                </a>
                            </li>

                            <li class="nv-li">
                                <a href="http://127.0.0.1:8000/detail/1" class="nv-a fs-15">
                                    Taman Mangrove
                                </a>
                            </li>
                            <li class="nv-li">
                                <a href="http://127.0.0.1:8000/detail/2" class="nv-a fs-15">
                                    Tebing Koja
                                </a>
                            </li>
                            <li class="nv-li">
                                <a href="http://127.0.0.1:8000/history" class="nv-a fs-15">
                                    Riwayat
                                </a>
                            </li>

                            <li class="nv-li">
                                <a href="http://127.0.0.1:8000/profile" class="nv-a fs-15">
                                    MYPAGE
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="hidden-lg">
                        <div class="">
                            <button onclick="toggleMenu('menu')" class="btn-primary">
                                Menu
                            </button>
                            <div id="menu"  class="fixed top-0 hidden left-0 right-0 w-full bg-white">
                                <div class="py-1em">
                                    <ul class="w-full text-left h-full block">
                                        <li class="nv-li-sm">
                                            <a href="http://localhost/wordpress-lks/" class="nv-a my-auto fs-15">
                                                Home
                                            </a>
                                        </li>

                                        <li class="nv-li-sm">
                                            <a href="http://127.0.0.1:8000/detail/1" class="nv-a fs-15">
                                                Taman Mangrove
                                            </a>
                                        </li>
                                        <li class="nv-li-sm">
                                            <a href="http://127.0.0.1:8000/detail/2" class="nv-a fs-15">
                                                Tebing Koja
                                            </a>
                                        </li>
                                        <li class="nv-li-sm">
                                            <a href="http://127.0.0.1:8000/history" class="nv-a fs-15">
                                                Riwayat
                                            </a>
                                        </li>

                                        <li class="nv-li-sm">
                                            <a href="http://127.0.0.1:8000/profile" class="nv-a fs-15">
                                                MYPAGE
                                            </a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </nav>


    <div class="s-content">
        <section class="w-full bg-primary" id="banner-1">
            <div class="w-full mx-auto flex">
                <div class="w-full h-banner-text-wp relative">
                    <div class="">
                        <div class="w-10 text-white mx-auto">
                            <div class="w-11 mx-auto  py-5 block">
                                <h1 class="fs-28 fw-600">SELAMAT Datang di website pariwisata Kabpuaten Tangerang</h1>
                                <h1 class="fs-18 my-05rem fw-500">Tentukan destinasi wisata anda dan pesan tiket anda.</h1>
                            </div>
                            <div class="w-11 mx-auto ">
                                <div class="my-1rem">
                                    <button class="btn-primary-rev">
                                        Jelajahi WIsata
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <div style="margin: 20px 0">
            <div class="c-content mx-auto">
                <h1 class="fs-banner-txt my-05rem fw-600 text-gray-700">Wisata Kami</h1>
                <section class="w-full" id="banner">
                    <div class="w-full mx-auto flex">
                        <div class="w-50-wp h-banner-wp relative">
                            <a href="/detail/1">
                                <img class="w-full radius-8 h-full cover" src="
                            http://localhost/wordpress-lks/wp-content/uploads/2023/12/taman-mangrove-1.png" />
                                <div class="shadow radius-8">

                                </div>
                                <div class="absolute bottom-5 left-0 right-0">
                                    <div class="w-10-banner text-white mx-auto">
                                        <div class="w-11 mx-auto py-2 block">
                                            <p class="fs-26 fw-500">TAMAN MANGROVE</p>
                                            <div>
                                                <div>
                                                    <p class="fs-16 fw-500">TANGERANG</p>
                                                </div>
                                                <div class="">
                                                    <p class="fs-16 fw-500">WISATA ALAM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-11 mx-auto ">
                                            <div class="my-1rem">
                                                <h2 class="fs-20 fw-600"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="w-50-wp h-banner-wp relative">
                            <a href="/detail/2">
                                <img class="w-full radius-8 h-full cover" src="http://localhost/wordpress-lks/wp-content/uploads/2023/12/tebing-koja.png" />
                                <div class="shadow radius-8">

                                </div>
                                <div class="absolute bottom-5 left-0 right-0">
                                    <div class="w-10-banner text-white mx-auto">
                                        <div class="w-11 mx-auto py-2 block">
                                            <p class="fs-26 fw-500">TEBING KOJA</p>
                                            <div>
                                                <div>
                                                    <p class="fs-16 fw-500">TANGERANG</p>
                                                </div>
                                                <div class="">
                                                    <p class="fs-16 fw-500">WISATA ALAM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-11 mx-auto ">
                                            <div class="my-1rem">
                                                <h2 class="fs-20 fw-600"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </section>

                <div class="w-full py-1rem">
                    <div class="w-full my-05rem">
                        <div class="my-1rem">
                            <h1 class="fs-banner-txt my-05rem fw-600 text-gray-700">Seputar Pertanyaan</h1>
                            <div class="my-05rem">
                                    <button onclick="toggleDropdown(1)" class="w-full text-left btn-dw border-b py-6">
                                        <div class="w-full">
                                            <p class="fs-15 py-5 text-gray-600 fw-600">Ini Aplikasi Apa?</p>
                                            <div  id="1" class="my-5 py-5 hidden ">
                                                <p class="fs-15 text-gray-500">Ini merupakan aplikasi untuk Pariwisata yang ada di kabupaten tangerang</p>
                                            </div>
                                        </div>
                                    </button>
                            </div>
                            <div class="my-05rem">
                                <button onclick="toggleDropdown(2)" class="w-full text-left btn-dw border-b py-6">
                                    <div class="w-full">
                                        <p class="fs-15 py-5 text-gray-600 fw-600">Aplikasi Ini Kapan Dibuat?</p>
                                        <div  id="2" class="my-5 py-5 hidden ">
                                            <p class="fs-15 text-gray-500">Aplikasi ini dibuat pada tanggal 8 desember 2023 pada saat LKS (LOMBA KOMPETISI SISWA) Tingkat Kabupaten Tangerang, dan dibuat hanya 6 Jam</p>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="my-05rem">
                                <button onclick="toggleDropdown(3)" class="w-full text-left btn-dw border-b py-6">
                                    <div class="w-full">
                                        <p class="fs-15 py-5 text-gray-600 fw-600">Siapa Pembuat Aplikasi Ini</p>
                                        <div  id="3" class="my-5 py-5 hidden ">
                                            <p class="fs-15 text-gray-500">Pembuat Aplikasi ini adalah seorang siswa dari SMKN 1 KABUPATEN TANGERANg</p>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


                <section class="w-full" id="about">
                    <div class="w- py-1rem">
                        <div class="w-full">
                            <div class="my-1rem ">
                                <div class="my-05rem">
                                    <div class="flex-block-sm w-full justify-between">
                                        <div class="w-6 me-auto-sm py-1rem border-b">
                                            <div class="my-5">
                                                <h3 class="fs-17 fw-600 text-gray-600">Tentang Kami</h3>
                                            </div>
                                            <div class="mb-1rem">
                                                <p class="fs-15 fw-500  text-gray-500">Kami merupakan sebuah layanan penyedia tiket untuk wisata di KAB.TANGERANG serta web kami berguna untuk memberikan pesona yang ada di Kabupaten Tangerang</p>
                                            </div>
                                        </div>
                                        <div class="w-6 me-auto-sm py-1rem border-b">
                                            <div class="my-5">
                                                <h3 class="fs-17 fw-600 text-gray-600">Pembuat Website ini</h3>
                                            </div>
                                            <div class="mb-1rem">
                                                <p class="fs-15 fw-500  text-gray-500">Pembuat website ini adalah seorang siswa kelas 12 smkn 1 kabpuaten Tangerang yang bernama andrian raihannudin</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

            </div>

        </div>

    </div>
    <footer class="w-full ft-m-4rem">
        <div class="w-11 ft-h mx-auto">
            <div class="ptb-21rem  flex-block-sm mx-auto">

                <div class="bx-ft-1">
                    <a href="/" class="h-img-logo">
                        <h1 class="fs-nav fw-500">Wisata Tangerang</h1>
                    </a>
                    <div class="my-05rem">
                        <p class="fs-15 text-gray-500 fw-500">Deskripsi footer</p>
                    </div>
                </div>
                <div class="bx-ft-2 mx-auto-ft px-auto-ft ">
                    <div class="flex justify-between">
                        <div class="w-10 mx-auto ">
                            <div class="text-left">
                                <h1 class="ft-h1 text-gray-500 mx-2">Wisata</h1>
                                <ul class="w-full">
                                    <li class="nv-li-ft">
                                        <a class="nv-a">Taman Mangrove</a>
                                    </li>
                                    <li class="nv-li-ft">
                                        <a class="nv-a">Tebing Koja</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-10 mx-auto ">
                            <div class="text-left">
                                <h1 class="ft-h1  text-gray-500">Tentang kami</h1>
                                <ul class="w-full">
                                    <li class="nv-li-ft">
                                        <a class="nv-a">Tentang Kami</a>
                                    </li>
                                    <li class="nv-li-ft">
                                        <a class="nv-a">Privacy & Police</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="pb-1rem w-full">
                <div class="text-center w-10 mx-auto">
                    <p class="fs-14 text-gray-500 ">Copyright 2023 by reihannudin</p>
                </div>
            </div>
        </div>

    </footer>

</main>




<script>

    function toggleDropdown (faqId){

        const toggle = document.getElementById(faqId);

        if(toggle.style.display === "block"){
            toggle.style.display = "none"
        }else{
            toggle.style.display = "block"
        }

    }

</script>


<script>
    function toggleMenu (){

        const toggle = document.getElementById('menu');

        if(toggle.style.display === "block"){
            toggle.style.display = "none"
        }else{
            toggle.style.display = "block"
        }

    }

</script>

</body>
</html>
