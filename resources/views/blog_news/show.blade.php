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

        <h1 class="text-3xl text-white font-bold">{{ $news->judul }}</h1>
    </main>

    <main class="w-full h-max flex flex-col px-28 pt-24">

        <div class="relative bg-white rounded-2xl shadow-lg w-full mx-auto">
            <div>
                <img src="{{ asset('storage/' . $news->gambar) }}" alt="Gambar Berita"
                    class="w-full h-96 object-cover px-5 pt-5 rounded-t-2xl">
            </div>

            <div class="p-5">
                <span
                    class="absolute top-80 left-10 bg-teal-500 border-2 border-white text-white text-lg font-semibold px-3 py-1">
                    {{ $news->category->nama ?? 'Tanpa Kategori' }}
                </span>

                <h1 class="block text-2xl font-bold mb-3 text-teal-600">
                    {{ $news->judul }}
                </h1>

                <div class="flex items-center mt-3 text-sm text-gray-500 justify-between">
                    <span>Diposting pada <span class="text-teal-600 font-semibold">
                            {{ \Carbon\Carbon::parse($news->created_at)->translatedFormat('d F Y') }}
                        </span></span>
                </div>

                <div class="mt-4 text-gray-800 leading-relaxed">
                    {!! nl2br(e($news->content)) !!}
                </div>

                <div class="mt-6">
                    <a href="{{ route('page.blog') }}" class="text-teal-600 hover:underline text-sm">
                        ← Kembali ke daftar berita
                    </a>
                </div>
            </div>
        </div>
    </main>

    <x-footer></x-footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
