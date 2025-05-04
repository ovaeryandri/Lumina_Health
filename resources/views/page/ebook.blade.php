<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumina Health | E-Books</title>
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

        <h1 class="text-6xl text-white font-bold">E-Books</h1>
    </main>

    <main class="w-full h-max flex px-28 mt-20">
        <section class="w-full flex flex-wrap">
            <div class="grid md:grid-cols-3 place-items-center gap-5">
                <div class="relative bg-white rounded-2xl overflow-hidden shadow-lg">
                    <img src="/images/consultation-1.jpg"
                        class="w-full h-52 object-cover border-8 border-white rounded-t-2xl">
                    <div class="px-5 pb-5">
                        <button class="block text-xl font-bold text-teal-600 hover:text-teal-500 duration-150">
                            Tahapan Gaya Hidup Sehat
                        </button>
                        <p class="w-full flex flex-wrap mt-3 text-justify">Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit.
                            Vero, fugit asperiores. Voluptatibus, repellendus unde illo iusto laborum deserunt
                            repudiandae? Enim?</p>

                        <button
                            class="w-full py-2 flex justify-center items-center rounded-full text-teal-500 border border-teal-500 bg-white hover:text-white hover:bg-teal-500 duration-200 text-sm font-bold mt-3">Download</button>
                    </div>
                </div>

                <div class="relative bg-white rounded-2xl overflow-hidden shadow-lg">
                    <img src="/images/consultation-1.jpg"
                        class="w-full h-52 object-cover border-8 border-white rounded-t-2xl">
                    <div class="px-5 pb-5">
                        <button class="block text-xl font-bold text-teal-600 hover:text-teal-500 duration-150">
                            Tahapan Gaya Hidup Sehat
                        </button>
                        <p class="w-full flex flex-wrap mt-3 text-justify">Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit.
                            Vero, fugit asperiores. Voluptatibus, repellendus unde illo iusto laborum deserunt
                            repudiandae? Enim?</p>

                        <button
                            class="w-full py-2 flex justify-center items-center rounded-full text-teal-500 border border-teal-500 bg-white hover:text-white hover:bg-teal-500 duration-200 text-sm font-bold mt-3">Download</button>
                    </div>
                </div>

                <div class="relative bg-white rounded-2xl overflow-hidden shadow-lg">
                    <img src="/images/consultation-1.jpg"
                        class="w-full h-52 object-cover border-8 border-white rounded-t-2xl">
                    <div class="px-5 pb-5">
                        <button class="block text-xl font-bold text-teal-600 hover:text-teal-500 duration-150">
                            Tahapan Gaya Hidup Sehat
                        </button>
                        <p class="w-full flex flex-wrap mt-3 text-justify">Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit.
                            Vero, fugit asperiores. Voluptatibus, repellendus unde illo iusto laborum deserunt
                            repudiandae? Enim?</p>

                        <button
                            class="w-full py-2 flex justify-center items-center rounded-full text-teal-500 border border-teal-500 bg-white hover:text-white hover:bg-teal-500 duration-200 text-sm font-bold mt-3">Download</button>
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
