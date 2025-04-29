<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumina Health | Contact</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="bg-teal-50">
    <x-header></x-header>

    <main class="w-full flex items-center justify-center -mt-1">
        <x-navbar></x-navbar>
    </main>

    <main
        class="w-full h-max text-white -mt-9 px-32 py-28 bg-gradient-to-r from-teal-400 via-teal-500 to-teal-400 flex justify-center items-center">

        <h1 class="text-6xl text-white font-bold">Kontak Kami</h1>
    </main>

    <main class="w-full h-max flex flex-col px-28 pt-32">
        <section
            class="flex justify-center items-center gap-x-2 px-4 py-1 mb-10 rounded-full border border-teal-400  w-max h-max">
            <img src="/images/heart-rate.png" alt="heart" class="w-5 h-5">
            <P class="font-semibold text-teal-400">Kontak</P>
        </section>

        <section class="flex items-center">
            <div class="flex flex-col">
                <h1 class="text-5xl text-teal-500 font-bold">Kontak Kami untuk</h1>
                <h1 class="text-5xl text-teal-700 font-bold">Informasi lainnya</h1>
            </div>
        </section>

        <section class="flex justify-evenly w-full mt-16">

            <div
                class="w-80 flex flex-col py-7 px-10 bg-white rounded-3xl hover:shadow-2xl hover:shadow-teal-200 duration-300 hover:-translate-y-3 relative">

                <div class="flex items-center gap-x-5">
                    <div class="flex text-teal-500 text-2xl font-semibold">
                        Lokasi :
                    </div>
                </div>

                <div class="mt-10">
                    <img src="/images/location.png" alt="lokasi" class="w-20 h-20">
                </div>

                <div class="w-20 h-20 absolute mt-24 ml-10 bg-teal-400 opacity-10 rounded-full"></div>

                <div class="flex flex-col mt-10 text-teal-500">
                    Pangkalpinang, Bangka Belitung
                </div>
            </div>

            <div
                class="w-80 flex flex-col py-7 px-10 bg-white rounded-3xl hover:shadow-2xl hover:shadow-teal-200 duration-300 hover:-translate-y-3 relative">

                <div class="flex items-center gap-x-5">
                    <div class="flex text-teal-500 text-2xl font-semibold">
                        Nomor Telepon :
                    </div>
                </div>

                <div class="mt-10">
                    <img src="/images/phone-call-2.png" alt="lokasi" class="w-20 h-20">
                </div>

                <div class="w-20 h-20 absolute mt-24 ml-10 bg-teal-400 opacity-10 rounded-full"></div>

                <div class="flex flex-col mt-10 text-teal-500">
                    No. Telpon : +62 812-3456-7890
                </div>
            </div>

            <div
                class="w-80 flex flex-col py-7 px-10 bg-white rounded-3xl hover:shadow-2xl hover:shadow-teal-200 duration-300 hover:-translate-y-3 relative">

                <div class="flex items-center gap-x-5">
                    <div class="flex text-teal-500 text-2xl font-semibold">
                        Email :
                    </div>
                </div>

                <div class="mt-10">
                    <img src="/images/email-3.png" alt="lokasi" class="w-20 h-20">
                </div>

                <div class="w-20 h-20 absolute mt-24 ml-10 bg-teal-400 opacity-10 rounded-full"></div>

                <div class="flex flex-col mt-10 text-teal-500">
                    ngetes@gmail.com
                </div>
            </div>

        </section>

    </main>

    <x-footer></x-footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
