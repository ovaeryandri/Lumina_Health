<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumina Health | Galeri</title>
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

        <h1 class="text-6xl text-white font-bold">Galeri</h1>
    </main>

    <main class="w-full h-max flex px-28 mt-20 justify-center">
        <div class="flex flex-col">
            <h1 class="text-teal-600 text-2xl font-bold">Galeri Dokumentasi</h1>
            <section class="grid grid-cols-3 gap-5 place-items-center">
                @foreach ($galeri as $item)
                    <div class="w-96 relative bg-white rounded-2xl overflow-hidden shadow-lg">
                        <video class="w-full h-60 object-cover border-8 border-white rounded-t-2xl" controls>
                            <source src="{{ asset('storage/' . $item->file_video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="p-5">
                            <a href="#" class="block text-xl font-bold mb-3 text-teal-600 hover:text-teal-500 duration-150">
                                {{ $item->judul }}
                            </a>
                            <p class="text-sm text-gray-500 mt-3">{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>

    </main>

    <x-footer></x-footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>



