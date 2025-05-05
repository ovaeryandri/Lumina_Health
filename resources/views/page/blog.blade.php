<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumina Health | Blog</title>
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

        <h1 class="text-6xl text-white font-bold">Blog</h1>
    </main>

    <main class="w-full h-max flex px-28 mt-20">
        <section class="w-max h-max flex flex-col">
            <div class="flex flex-col w-72 rounded-2xl bg-white p-7">
                <div
                    class="w-full rounded-full py-3 bg-white border border-teal-500 text-teal-500 font-bold flex justify-center items-center">
                    Post Kategori
                </div>

                <ul class="mt-5 font-semibold text-teal-500 space-y-3">
                    <li>&#8594; Gizi & Makanan Sehat</li>
                    <div class="w-full h-0.5 rounded-full bg-teal-500 opacity-20"></div>
                    <li>&#8594; Kebugaran & Jasmani</li>
                    <div class="w-full h-0.5 rounded-full bg-teal-500 opacity-20"></div>
                    <li>&#8594; Gaya Hidup Sehat</li>
                    <div class="w-full h-0.5 rounded-full bg-teal-500 opacity-20"></div>
                    <li>&#8594; Psikologi</li>
                </ul>
            </div>

            <div class="flex flex-col w-72 rounded-2xl bg-white p-7 mt-10">
                <div
                    class="w-full rounded-full py-3 bg-white border border-teal-500 text-teal-500 font-bold flex justify-center items-center">
                    Post Terbaru
                </div>

                <ul class="mt-5 font-semibold text-teal-500 space-y-5 fle">
                    <li class="w-full flex items-center">
                        <img src="/images/consultation-1.jpg" alt="" class="w-36 h-32 rounded-2xl">
                        <div class="flex flex-col ml-5">
                            <h1 class="text-teal-600 text-sm font-bold mb-3">Permasalahan gaya hidup berantakan</h1>
                            <span class="text-gray-400 text-xs">03 Mei 2025</span>
                        </div>
                    </li>

                    <li class="w-full flex items-center">
                        <img src="/images/consultation-1.jpg" alt="" class="w-36 h-32 rounded-2xl">
                        <div class="flex flex-col ml-5">
                            <h1 class="text-teal-600 text-sm font-bold mb-3">Permasalahan gaya hidup berantakan</h1>
                            <span class="text-gray-400 text-xs">03 Mei 2025</span>
                        </div>
                    </li>

                    <li class="w-full flex items-center">
                        <img src="/images/consultation-1.jpg" alt="" class="w-36 h-32 rounded-2xl">
                        <div class="flex flex-col ml-5">
                            <h1 class="text-teal-600 text-sm font-bold mb-3">Permasalahan gaya hidup berantakan</h1>
                            <span class="text-gray-400 text-xs">03 Mei 2025</span>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="ml-10 w-full h-max flex flex-col">
            <div class="grid grid-cols-2 gap-5">
                <div class="w-80 relative bg-white rounded-2xl overflow-hidden shadow-lg">
                    <img src="/images/consultation-1.jpg"
                        class="w-full h-60 object-cover border-8 border-white rounded-t-2xl">
                    <div class="p-5">
                        <span
                            class="absolute top-48 left-5 bg-teal-500 border-2 border-white text-white text-xs font-semibold px-3 py-1">
                            Psikologi
                        </span>
                        <a href="#"
                            class="block text-xl font-bold mb-3 text-teal-600 hover:text-teal-500 duration-150">
                            Permasalahan gaya hidup berantakan
                        </a>
                        <div class="flex items-center mt-3 text-sm text-gray-500 space-x-2">
                            <span>03 Mei 2025</span>
                        </div>
                    </div>
                </div>

                <div class="w-80 relative bg-white rounded-2xl overflow-hidden shadow-lg">
                    <img src="/images/consultation-1.jpg"
                        class="w-full h-60 object-cover border-8 border-white rounded-t-2xl">
                    <div class="p-5">
                        <span
                            class="absolute top-48 left-5 bg-teal-500 border-2 border-white text-white text-xs font-semibold px-3 py-1">
                            Psikologi
                        </span>
                        <a href="#"
                            class="block text-xl font-bold mb-3 text-teal-600 hover:text-teal-500 duration-150">
                            Permasalahan gaya hidup berantakan
                        </a>
                        <div class="flex items-center mt-3 text-sm text-gray-500 space-x-2">
                            <span>03 Mei 2025</span>
                        </div>
                    </div>
                </div>

                <div class="w-80 relative bg-white rounded-2xl overflow-hidden shadow-lg">
                    <img src="/images/consultation-1.jpg"
                        class="w-full h-60 object-cover border-8 border-white rounded-t-2xl">
                    <div class="p-5">
                        <span
                            class="absolute top-48 left-5 bg-teal-500 border-2 border-white text-white text-xs font-semibold px-3 py-1">
                            Psikologi
                        </span>
                        <a href="#"
                            class="block text-xl font-bold mb-3 text-teal-600 hover:text-teal-500 duration-150">
                            Permasalahan gaya hidup berantakan
                        </a>
                        <div class="flex items-center mt-3 text-sm text-gray-500 space-x-2">
                            <span>03 Mei 2025</span>
                        </div>
                    </div>
                </div>

                <div class="w-80 relative bg-white rounded-2xl overflow-hidden shadow-lg">
                    <img src="/images/consultation-1.jpg"
                        class="w-full h-60 object-cover border-8 border-white rounded-t-2xl">
                    <div class="p-5">
                        <span
                            class="absolute top-48 left-5 bg-teal-500 border-2 border-white text-white text-xs font-semibold px-3 py-1">
                            Psikologi
                        </span>
                        <a href="#"
                            class="block text-xl font-bold mb-3 text-teal-600 hover:text-teal-500 duration-150">
                            Permasalahan gaya hidup berantakan
                        </a>
                        <div class="flex items-center text-sm text-gray-500 space-x-2">
                            <span>03 Mei 2025</span>
                        </div>
                    </div>
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
