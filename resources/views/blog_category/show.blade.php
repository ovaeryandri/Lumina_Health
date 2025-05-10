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

        <h1 class="text-3xl text-white font-bold">{{ $category->nama }}</h1>
    </main>

    <main class="w-full h-max flex flex-col px-28 pt-24">

        {{-- Blog News --}}
        <h2 class="text-xl font-semibold text-teal-600 mb-2">Blog Berita</h2>
        <div class="w-full flex justify-center">
            <div class="grid md:grid-cols-3 gap-x-20 gap-y-4 mb-6 place-items-center">
                @forelse ($blogNews as $news)
                    <div class="bg-white rounded-lg shadow p-4 w-96">
                        <img src="{{ asset('storage/' . $news->gambar) }}"
                            class="w-full h-52 object-cover mb-2 rounded">
                        <h3 class="text-teal-600 font-semibold text-lg">
                            <a class="hover:text-teal-500 duration-150"
                                href="{{ route('blognews.show', $news->slug) }}">{{ $news->judul }}</a>
                        </h3>
                        <p class="text-gray-800 mt-2">{{ Str::limit($news->content, 100) }}</p>
                        <span class="text-gray-700 text-xs mt-5 block">
                            {{ \Carbon\Carbon::parse($news->created_at)->translatedFormat('d F Y') }}
                        </span>
                    </div>
                @empty
                    <p class="text-center col-span-3">Tidak ada blog news untuk kategori ini.</p>
                @endforelse
            </div>
        </div>

        {{-- Blog Post --}}
        <h2 class="text-xl font-semibold text-teal-600 mb-2 mt-10">Blog Post</h2>
        <div class="w-full flex justify-center">
            <div class="grid md:grid-cols-3 gap-x-20 gap-y-4 mb-6 place-items-center">
                @forelse ($blogPost as $post)
                    <div class="bg-white rounded-lg shadow p-4 w-96">
                        <img src="{{ asset('storage/' . $post->gambar) }}"
                            class="w-full h-52 object-cover mb-2 rounded">
                        <h3 class="text-teal-600 font-semibold text-lg">
                            <a class="hover:text-teal-500 duration-150"
                                href="{{ route('blogpost.show', $post->slug) }}">{{ $post->judul }}</a>
                        </h3>
                        <p class="text-gray-800 mt-2">{{ Str::limit($post->content, 100) }}</p>
                        <span class="text-gray-700 text-xs mt-5 block">
                            {{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d F Y') }}
                        </span>
                    </div>
                @empty
                    <p class="text-center col-span-3">Tidak ada blog post untuk kategori ini.</p>
                @endforelse
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
