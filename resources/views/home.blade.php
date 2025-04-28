<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>{{ config('app.name', 'Lumina Health') }}</title> --}}
    <title>Lumina Health | Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="bg-teal-50">

    <main class="flex justify-between mx-20 pt-7 max-w-full h-20 bg-teal-50 mb-5 px-10">
        <h1 class="text-teal-400 font-bold text-2xl">Lumina Health</h1>

        <div class="flex items-center w-max h-max">
            <div class="w-max h-max p-3 rounded-full bg-white">
                <img src="/images/phone-call.png" alt="phone" class="w-6 h-6">
            </div>
            <div class="flex flex-col ml-3">
                <p class="font-semibold">Nomor Telepon:</p>
                <p class="text-teal-400 font-bold text-lg">+62 812-3456-789</p>
            </div>
        </div>

        <div class="flex items-center w-max h-max">
            <div class="w-max h-max p-3 rounded-full bg-white">
                <img src="/images/email.png" alt="email" class="w-6 h-6">
            </div>
            <div class="flex flex-col ml-3">
                <p class="font-semibold">Email:</p>
                <p class="text-teal-400 font-bold text-lg">ngetes@gmail.com</p>
            </div>
        </div>

        <button
            class="w-max h-max px-7 py-2 rounded-full bg-teal-400 text-white font-semibold hover:bg-teal-600 duration-200 cursor-pointer">
            Konsultasi
        </button>
    </main>

    <main class="w-full flex items-center justify-center -mt-1">
        <x-navbar></x-navbar>

    </main>

    <main
        class="w-full h-screen text-white -mt-9 px-32 py-24 bg-gradient-to-r from-teal-400 via-teal-500 to-teal-400 rounded-b-[30%] flex justify-end">

        <div class="flex flex-col">
            <div
                class="flex justify-center items-center gap-x-2 px-4 py-1 mb-7 rounded-full border border-white  w-max h-max">
                <img src="/images/heart.png" alt="heart" class="w-5 h-5">
                <P class="font-semibold">Kesehatan & Jasmani</P>
            </div>

            <h1 class="text-5xl font-bold">Program Kesehatan</h1>
            <h1 class="text-5xl font-bold text-teal-300">Terbaik</h1>
            <p class="text-lg">Penyedia program dan layanan kesehatan terbaik di dunia,</p>
            <p class="text-lg">dijamin kesehatan Anda mencapai titik tertinggi</p>

            <button
                class="w-max h-max px-7 py-2 mt-5 rounded-full bg-teal-300 text-white text-lg font-semibold hover:bg-teal-500 duration-200 cursor-pointer">
                Selengkapnya
            </button>
        </div>


        <div
            class="w-6xl h-64 left-16 gap-x-10 bg-gradient-to-b from-teal-300 to-teal-400 rounded-xl flex flex-row-reverse items-center absolute mt-96 p-10">
            <div class="flex flex-col justify-start items-start">
                <img src="/images/service.png" alt="service" class="w-20 h-20 bg-white rounded-full p-3">
                <h1 class="text-white font-bold text-2xl">24 Jam Layanan</h1>
                <p>Layanan yang tersedia</p>
                <p>untuk Anda selama 24 jam.</p>
            </div>

            <div class="flex flex-col justify-start items-start">
                <img src="/images/service.png" alt="service" class="w-20 h-20 bg-white rounded-full p-3">
                <h1 class="text-white font-bold text-2xl">24 Jam Layanan</h1>
                <p>Layanan yang tersedia</p>
                <p>untuk Anda selama 24 jam.</p>
            </div>

        </div>

        <img src="/images/health.jpg" alt="healt"
            class="rounded-b-[50%] rounded-t-[50%] w-lg h-max object-contain absolute left-40">

    </main>

    <main data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="700"
        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-start"
        class="w-full h-max flex flex-col items-center px-28 pt-60">
        <section
            class="flex justify-center items-center gap-x-2 px-4 py-1 mb-10 rounded-full border border-teal-400  w-max h-max">
            <img src="/images/consultant.png" alt="heart" class="w-5 h-5">
            <P class="font-semibold text-teal-400">Konsultan</P>
        </section>

        <section class="flex flex-col items-center">
            <h1 class="text-5xl text-teal-500 font-bold">Kami Adalah Konsultan Terbaik</h1>
            <h1 class="text-5xl text-teal-700 font-bold">Di Lumina Health</h1>
        </section>

        <section class="flex w-full mt-16">

            <img src="/images/consultation-2.jpg" alt="Konsultasi" class="w-80 rounded-3xl">

            <div class="flex flex-col ml-14">
                <div class=" w-96 h-max flex flex-wrap">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi repudiandae quisquam, voluptas
                    aliquid
                    odio error eos quos laudantium sit eaque?
                </div>

                <div class="rounded-md space-y-2 mt-5 text-teal-600">
                    <div class="flex items-start gap-x-2">
                        <svg class="w-4 h-4 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414L9 13.414l4.707-4.707z"
                                clip-rule="evenodd" />
                        </svg>
                        <p>Dolor necessitatibus faucibus wisi.</p>
                    </div>
                    <div class="flex items-start gap-x-2">
                        <svg class="w-4 h-4 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414L9 13.414l4.707-4.707z"
                                clip-rule="evenodd" />
                        </svg>
                        <p>Quibusdam ab ex pulvinar fugit.</p>
                    </div>
                    <div class="flex items-start gap-x-2">
                        <svg class="w-4 h-4 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414L9 13.414l4.707-4.707z"
                                clip-rule="evenodd" />
                        </svg>
                        <p>Itaque illo eiusmod pede ornare.</p>
                    </div>
                    <div class="flex items-start gap-x-2">
                        <svg class="w-4 h-4 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414L9 13.414l4.707-4.707z"
                                clip-rule="evenodd" />
                        </svg>
                        <p>Sequi rem iaculis posuere pede viera.</p>
                    </div>
                </div>
            </div>

            <div class="w-80 h-max ml-5 p-9 rounded-4xl bg-teal-500 flex flex-col items-center">
                <div class="w-full h-max py-2 rounded-full bg-white flex items-center justify-center">
                    <span class="text-teal-400 font-semibold text-lg">Jam Buka</span>
                </div>
                <p class="my-5 text-white font-bold text-lg">Jadwal dan jam buka kami.</p>
                <div class="flex flex-col gap-y-2 items-center text-white font-bold">
                    <h1>Senin - Jumat: 08.00 - 22.00</h1>
                    <div class="w-full h-0.5 bg-white opacity-30"></div>
                    <h1>Sabtu - Minggu: 07.00 - 20.00</h1>
                    <div class="w-full h-0.5 bg-white opacity-30"></div>
                    <h1>24 Jam Terbuka Layanan Darurat</h1>
                </div>
            </div>

            <img src="/images/consultation-1.jpg" alt="Konsultasi"
                class="absolute -z-50 right-28 rounded-2xl w-3xl h-96 mt-64">

        </section>
    </main>


    <main data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="700"
        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
        data-aos-anchor-placement="top-start" class="w-full h-max flex flex-col px-28 mt-40 ">

        <section
            class="flex justify-center items-center gap-x-2 px-4 py-1 mb-10 rounded-full border border-teal-400  w-max h-max">
            <img src="/images/superior.png" alt="heart" class="w-5 h-5">
            <P class="font-semibold text-teal-400">Program Unggulan</P>
        </section>

        <section class="flex w-full justify-between">
            <div class="flex flex-col">
                <h1 class="text-4xl text-teal-500 font-bold">Program Unggulan</h1>
                <h1 class="text-4xl text-teal-700 font-bold">Kami</h1>
            </div>

            <div class="flex flex-col text-teal-600">
                <p>Program terbaik yang kami sediakan untuk</p>
                <p>Anda yang ingin mencapai kesehatan maksimal</p>
                <p>Dengan mudah dan nyaman untuk Anda.</p>
            </div>

            <button
                class="w-max h-max px-7 py-2 mt-5 rounded-full bg-teal-500 text-white text-lg font-semibold hover:bg-teal-700 duration-200 cursor-pointer">
                Program Unggulan
            </button>
        </section>

        <section class="flex flex-wrap w-full gap-x-5 gap-y-5 mt-16">

            <x-card nomor="01">
                <x-slot:judul>
                    <h1 class="text-teal-700 text-2xl font-semibold leading-4">Konsultasi</h1>
                    <h1 class="text-teal-700 text-2xl font-semibold">Kesehatan</h1>
                </x-slot:judul>

                <x-slot:logo>
                    <img src="/images/consultation.png" alt="Konsultasi" class="w-28 h-28">
                </x-slot:logo>

                <x-slot:deskripsi>
                    <p>Layanan konsultasi mengenai</p>
                    <p>kesehatan atau saran</p>
                    <p>kesehatan lainnya.</p>
                </x-slot:deskripsi>
            </x-card>

            <x-card nomor="01">
                <x-slot:judul>
                    <h1 class="text-teal-700 text-2xl font-semibold leading-4">Konsultasi</h1>
                    <h1 class="text-teal-700 text-2xl font-semibold">Kesehatan</h1>
                </x-slot:judul>

                <x-slot:logo>
                    <img src="/images/consultation.png" alt="Konsultasi" class="w-28 h-28">
                </x-slot:logo>

                <x-slot:deskripsi>
                    <p>Layanan konsultasi mengenai</p>
                    <p>kesehatan atau saran</p>
                    <p>kesehatan lainnya.</p>
                </x-slot:deskripsi>
            </x-card>

            <x-card nomor="01">
                <x-slot:judul>
                    <h1 class="text-teal-700 text-2xl font-semibold leading-4">Konsultasi</h1>
                    <h1 class="text-teal-700 text-2xl font-semibold">Kesehatan</h1>
                </x-slot:judul>

                <x-slot:logo>
                    <img src="/images/consultation.png" alt="Konsultasi" class="w-28 h-28">
                </x-slot:logo>

                <x-slot:deskripsi>
                    <p>Layanan konsultasi mengenai</p>
                    <p>kesehatan atau saran</p>
                    <p>kesehatan lainnya.</p>
                </x-slot:deskripsi>
            </x-card>

            <x-card nomor="01">
                <x-slot:judul>
                    <h1 class="text-teal-700 text-2xl font-semibold leading-4">Konsultasi</h1>
                    <h1 class="text-teal-700 text-2xl font-semibold">Kesehatan</h1>
                </x-slot:judul>

                <x-slot:logo>
                    <img src="/images/consultation.png" alt="Konsultasi" class="w-28 h-28">
                </x-slot:logo>

                <x-slot:deskripsi>
                    <p>Layanan konsultasi mengenai</p>
                    <p>kesehatan atau saran</p>
                    <p>kesehatan lainnya.</p>
                </x-slot:deskripsi>
            </x-card>

        </section>

    </main>



    <main data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="700"
        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
        data-aos-anchor-placement="top-start" class="w-full h-max flex flex-col items-center mt-32 pb-10 bg-teal-500">
        <section class="w-full flex gap-x-20 items-center justify-center py-12 bg-teal-300">
            <div class="flex items-center gap-x-4 ml-72">
                <img src="/images/heart.png" alt="" class="w-24 h-24">
                <div class="flex flex-col text-white">
                    <h1 class="text-4xl font-bold mb-3">Ayo, Berlangganan</h1>
                    <h1 class="text-lg font-semibold opacity-80">Untuk kesehatan terbaik Anda</h1>
                </div>
            </div>


            <button
                class="w-max h-max rounded-full px-7 py-4 cursor-pointer text-white border border-white bg-teal-500 hover:bg-teal-700 duration-200">
                Langganan Sekarang
            </button>
        </section>

        <section class="px-24 flex gap-x-20 w-full">
            <div class="w-80 h-max ml-5 -mt-20 py-10 px-5 rounded-4xl bg-slate-100 flex flex-col items-center">
                <div class="w-full h-max py-2 rounded-full bg-white flex items-center justify-center">
                    <span class="text-teal-400 font-semibold text-lg">Jam Buka</span>
                </div>
                <div class="w-64 flex justify-center items-center my-5 text-sm text-teal-400 opacity-50 font-bold">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi totam aperiam labore quas vel
                    minus suscipit dolores architecto animi beatae!
                </div>
                <div class="flex flex-col gap-y-2 items-center text-teal-400 font-bold">
                    <h1>Senin - Jumat: 08.00 - 22.00</h1>
                    <div class="w-full h-0.5 bg-teal-400 opacity-30"></div>
                    <h1>Sabtu - Minggu: 07.00 - 20.00</h1>
                    <div class="w-full h-0.5 bg-teal-400 opacity-30"></div>
                    <h1>24 Jam Terbuka Layanan Darurat</h1>
                </div>
            </div>

            <div class="flex flex-col gap-y-3 mt-20">
                <h1 class="mb-5 text-white font-bold text-xl">Workshop Kami</h1>
                <div class="flex gap-x-20 text-lg text-white font-semibold">
                    <p class="cursor-pointer hover:text-teal-300 duration-200">
                        ➜ Jepang
                    </p>
                    <p class="cursor-pointer hover:text-teal-300 duration-200">
                        ➜ Jepang
                    </p>
                </div>
                <div class="flex gap-x-20 text-lg text-white font-semibold">
                    <p class="cursor-pointer hover:text-teal-300 duration-200">
                        ➜ Jepang
                    </p>
                    <p class="cursor-pointer hover:text-teal-300 duration-200">
                        ➜ Jepang
                    </p>
                </div>
                <div class="flex gap-x-20 text-lg text-white font-semibold">
                    <p class="cursor-pointer hover:text-teal-300 duration-200">
                        ➜ Jepang
                    </p>
                    <p class="cursor-pointer hover:text-teal-300 duration-200">
                        ➜ Jepang
                    </p>
                </div>
                <div class="flex gap-x-20 text-lg text-white font-semibold">
                    <p class="cursor-pointer hover:text-teal-300 duration-200">
                        ➜ Jepang
                    </p>
                    <p class="cursor-pointer hover:text-teal-300 duration-200">
                        ➜ Jepang
                    </p>
                </div>
                <div class="flex gap-x-20 text-lg text-white font-semibold">
                    <p class="cursor-pointer hover:text-teal-300 duration-200">
                        ➜ Jepang
                    </p>
                    <p class="cursor-pointer hover:text-teal-300 duration-200">
                        ➜ Jepang
                    </p>
                </div>
            </div>

            <div class="flex flex-col mt-20">
                <h1 class="mb-5 text-white font-bold text-xl">Informasi Kontak</h1>
                <div class="flex flex-col text-white font-semibold mb-5">
                    <p>Jika ada kendala mengenain layanan kami</p>
                    <p>bisa hubungin di bawah ini.</p>
                </div>

                <div class="flex flex-col gap-y-2 text-lg text-white font-semibold">
                    <p>Lokasi: Jepang</p>
                    <p>Email: ngetes@gmail.com</p>
                    <p>Telepon: +62 812-3456-7890</p>
                </div>
            </div>
        </section>

        <div class="w-full px-24 h-0.5 rounded-full bg-white opacity-50 mt-10"></div>

        <div class="flex w-full px-24 items-center mt-10">
            <div class="w-full flex justify-start items-center">
                <h1 class="text-white font-bold text-2xl">Lumina Health</h1>
            </div>
            <div class="flex w-full justify-end items-center">
                <h1 class="text-white font-semibold text-lg">
                    Copyright © 2024 Lumina Health. All right reserved.
                </h1>
            </div>
        </div>
    </main>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
