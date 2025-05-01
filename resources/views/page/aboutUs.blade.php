<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumina Health | Tentang Kami</title>
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

        <h1 class="text-6xl text-white font-bold">Tentang Kami</h1>
    </main>

    <main class="w-full h-max flex flex-col px-28 mt-20">

        <section
            class="flex justify-center items-center gap-x-2 px-4 py-1 mb-10 rounded-full border border-teal-400  w-max h-max">
            <img src="/images/heart-rate.png" alt="heart" class="w-5 h-5">
            <P class="font-semibold text-teal-400">Spesialis Kami</P>
        </section>

        <section class="flex w-full justify-between">
            <div class="flex flex-col">
                <h1 class="text-4xl text-teal-500 font-bold">Tenaga Medis Kami</h1>
                <h1 class="text-4xl text-teal-700 font-bold">yang Berkualifikasi Terbaik</h1>
            </div>

            <div class="flex flex-col text-teal-600">
                <p>Program terbaik yang kami sediakan untuk</p>
                <p>Anda yang ingin mencapai kesehatan maksimal</p>
                <p>Dengan mudah dan nyaman untuk Anda.</p>
            </div>
        </section>

        <section class="flex flex-wrap justify-center w-full h-max gap-6 mt-10">
            <div
                class="flex flex-col items-center p-8 bg-white rounded-3xl hover:shadow-2xl hover:shadow-teal-200 duration-300 hover:-translate-y-3 relative">
                <div class="flex w-full justify-between items-center">
                    <div class="flex flex-col">
                        <h1 class="text-2xl text-teal-600 font-bold">Dr. Rafi</h1>
                        <p class="text-sm font-semibold text-emerald-400">Spesialis Gizi</p>
                    </div>
                    <img src="/images/heart-2.png" alt="heart" class="w-12 h-12">
                </div>

                <div
                    class="w-max h-max mt-5 flex items-center justify-center rounded-full bg-white p-2 border-2 border-teal-600">
                    <img src="/images/doctor-3.png" alt="doctor" class="object-fill rounded-full w-64 h-64">
                </div>

                {{-- <div class="flex w-full items-center mt-5">
                    <p class="text-lg text-teal-600 font-semibold">5 tahun <br> pengalaman</p>
                </div> --}}
            </div>

            <div
                class="flex flex-col items-center p-8 bg-white rounded-3xl hover:shadow-2xl hover:shadow-teal-200 duration-300 hover:-translate-y-3 relative">
                <div class="flex w-full justify-between items-center">
                    <div class="flex flex-col">
                        <h1 class="text-2xl text-teal-600 font-bold">Dr. Rafi</h1>
                        <p class="text-sm font-semibold text-emerald-400">Spesialis Gizi</p>
                    </div>
                    <img src="/images/heart-2.png" alt="heart" class="w-12 h-12">
                </div>

                <div
                    class="w-max h-max mt-5 flex items-center justify-center rounded-full bg-white p-2 border-2 border-teal-600">
                    <img src="/images/doctor-3.png" alt="doctor" class="object-fill rounded-full w-64 h-64">
                </div>

                {{-- <div class="flex w-full items-center mt-5">
                    <p class="text-lg text-teal-600 font-semibold">5 tahun <br> pengalaman</p>
                </div> --}}

            </div>

            <div
                class="flex flex-col items-center p-8 bg-white rounded-3xl hover:shadow-2xl hover:shadow-teal-200 duration-300 hover:-translate-y-3 relative">
                <div class="flex w-full justify-between items-center">
                    <div class="flex flex-col">
                        <h1 class="text-2xl text-teal-600 font-bold">Dr. Rafi</h1>
                        <p class="text-sm font-semibold text-emerald-400">Spesialis Gizi</p>
                    </div>
                    <img src="/images/heart-2.png" alt="heart" class="w-12 h-12">
                </div>

                <div
                    class="w-max h-max mt-5 flex items-center justify-center rounded-full bg-white p-2 border-2 border-teal-600">
                    <img src="/images/doctor-3.png" alt="doctor" class="object-fill rounded-full w-64 h-64">
                </div>

                {{-- <div class="flex w-full items-center mt-5">
                    <p class="text-lg text-teal-600 font-semibold">5 tahun <br> pengalaman</p>
                </div> --}}
            </div>

            <div
                class="flex flex-col items-center p-8 bg-white rounded-3xl hover:shadow-2xl hover:shadow-teal-200 duration-300 hover:-translate-y-3 relative">
                <div class="flex w-full justify-between items-center">
                    <div class="flex flex-col">
                        <h1 class="text-2xl text-teal-600 font-bold">Dr. Rafi</h1>
                        <p class="text-sm font-semibold text-emerald-400">Spesialis Gizi</p>
                    </div>
                    <img src="/images/heart-2.png" alt="heart" class="w-12 h-12">
                </div>

                <div
                    class="w-max h-max mt-5 flex items-center justify-center rounded-full bg-white p-2 border-2 border-teal-600">
                    <img src="/images/doctor-3.png" alt="doctor" class="object-fill rounded-full w-64 h-64">
                </div>

                {{-- <div class="flex w-full items-center mt-5">
                    <p class="text-lg text-teal-600 font-semibold">5 tahun <br> pengalaman</p>
                </div> --}}

            </div>

            <div
                class="flex flex-col items-center p-8 bg-white rounded-3xl hover:shadow-2xl hover:shadow-teal-200 duration-300 hover:-translate-y-3 relative">
                <div class="flex w-full justify-between items-center">
                    <div class="flex flex-col">
                        <h1 class="text-2xl text-teal-600 font-bold">Dr. Rafi</h1>
                        <p class="text-sm font-semibold text-emerald-400">Spesialis Gizi</p>
                    </div>
                    <img src="/images/heart-2.png" alt="heart" class="w-12 h-12">
                </div>

                <div
                    class="w-max h-max mt-5 flex items-center justify-center rounded-full bg-white p-2 border-2 border-teal-600">
                    <img src="/images/doctor-3.png" alt="doctor" class="object-fill rounded-full w-64 h-64">
                </div>

                {{-- <div class="flex w-full items-center mt-5">
                    <p class="text-lg text-teal-600 font-semibold">5 tahun <br> pengalaman</p>
                </div> --}}

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
