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
            <div class="flex flex-col w-96 rounded-2xl bg-white p-7">
                <h1
                    class="w-full rounded-full py-3 bg-white text-xl text-teal-500 font-bold flex justify-center items-center">
                    Pencarian
                </h1>

                <div class="mt-3 w-full font-semibold text-gray-700 space-y-3">
                    <input type="search" id="searchInput" placeholder="Cari..."
                        class="w-full bg-white rounded-full py-2 px-5 border border-teal-500 focus:outline-none focus:ring-teal-600">
                </div>

                <div id="resultList" class="mt-6 space-y-4 text-sm text-gray-700">
                    {{-- Hasil pencarian AJAX akan muncul di sini --}}
                </div>
            </div>

            <div class="flex flex-col w-96 rounded-2xl bg-white p-7 mt-10">
                <div
                    class="w-full rounded-full py-3 bg-white border border-teal-500 text-teal-500 font-bold flex justify-center items-center">
                    Post Kategori
                </div>

                <ul class="mt-5 font-semibold text-teal-500 space-y-3">
                    @foreach ($categories as $category)
                        <li class="hover:underline duration-150"> <a
                                href="{{ route('blogcategory.show', $category->slug) }}">&#8594;
                                {{ $category->nama }}</a>
                        </li>
                        @if (!$loop->last)
                            <div class="w-full h-0.5 rounded-full bg-teal-500 opacity-20"></div>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="flex flex-col w-96 rounded-2xl bg-white p-7 mt-10">
                <div
                    class="w-full rounded-full py-3 bg-white border border-teal-500 text-teal-500 font-bold flex justify-center items-center">
                    Blog Berita Terbaru
                </div>

                <ul class="mt-5 font-semibold text-teal-500 space-y-5">
                    @foreach ($blogNews as $berita)
                        <li class="w-full flex items-center">
                            <img src="{{ asset('storage/' . $berita->gambar) }}" alt=""
                                class="w-36 h-32 rounded-2xl object-cover">
                            <div class="flex flex-col ml-5">
                                <a href="{{ route('blognews.show', $berita->slug) }}"
                                    class="text-teal-600 font-bold mb-3 hover:underline">
                                    {{ \Illuminate\Support\Str::limit($berita->judul, 50) }}
                                </a>
                                <span class="text-teal-600 text-sm">
                                    {{ $berita->category->nama }}
                                </span>
                                <span class="text-gray-400 text-xs">
                                    {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y') }}
                                </span>
                                <a href="{{ route('blognews.show', $berita->slug) }}"
                                    class="text-sm text-teal-500 hover:underline mt-3">
                                    Baca selengkapnya →
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="flex flex-col w-96 rounded-2xl bg-white p-7 mt-10">
                <div
                    class="w-full rounded-full py-3 bg-white border border-teal-500 text-teal-500 font-bold flex justify-center items-center">
                    Blog Post Terbaru
                </div>

                <ul class="mt-5 font-semibold text-teal-500 space-y-5">
                    @foreach ($blogPost as $post)
                        <li class="w-full flex items-center">
                            <img src="{{ asset('storage/' . $post->gambar) }}" alt=""
                                class="w-36 h-32 rounded-2xl object-cover">
                            <div class="flex flex-col ml-5">
                                <a href="{{ route('blogpost.show', $post->slug) }}"
                                    class="text-teal-600 font-bold mb-3 hover:underline">
                                    {{ \Illuminate\Support\Str::limit($post->judul, 50) }}
                                </a>
                                <span class="text-teal-600 text-sm">
                                    {{ $post->category->nama }}
                                </span>
                                <span class="text-gray-400 text-xs">
                                    {{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d F Y') }}
                                </span>
                                <a href="{{ route('blogpost.show', $post->slug) }}"
                                    class="text-sm text-teal-500 hover:underline mt-3">
                                    Baca selengkapnya →
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="ml-20 w-full h-max flex flex-col">
            <h1 class="mb-2 text-teal-600 text-xl font-bold">Blog Berita</h1>
            <div class="grid grid-cols-2 gap-5">
                @foreach ($newsPaginate as $news)
                    <div class="w-80 relative bg-white rounded-2xl overflow-hidden shadow-lg">
                        <img src="{{ asset('storage/' . $news->gambar) }}"
                            class="w-full h-60 object-cover border-8 border-white rounded-t-2xl">
                        <div class="p-5">
                            <span
                                class="absolute top-48 left-5 bg-teal-500 border-2 border-white text-white text-xs font-semibold px-3 py-1">
                                {{ $news->category->nama ?? '-' }}
                            </span>
                            <a href="{{ route('blognews.show', $news->slug) }}"
                                class="block text-xl font-bold mb-3 text-teal-600 hover:text-teal-500 duration-150">
                                {{ Str::limit($news->judul, 60) }}
                            </a>
                            <div class="flex items-center text-sm text-gray-500 space-x-2">
                                <span>{{ \Carbon\Carbon::parse($news->created_at)->translatedFormat('d F Y') }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- PAGINATION --}}
            @if ($newsPaginate->hasPages())
                <div class="mt-6 flex justify-center flex-wrap">
                    {{ $newsPaginate->links('pagination::tailwind') }}
                </div>
            @endif

            <h1 class="mb-2 mt-20 text-teal-600 text-xl font-bold">Blog Post</h1>
            <div class="grid grid-cols-2 gap-5">
                @foreach ($postPaginate as $post)
                    <div class="w-80 relative bg-white rounded-2xl overflow-hidden shadow-lg">
                        <img src="{{ asset('storage/' . $post->gambar) }}"
                            class="w-full h-60 object-cover border-8 border-white rounded-t-2xl">
                        <div class="p-5">
                            <span
                                class="absolute top-48 left-5 bg-teal-500 border-2 border-white text-white text-xs font-semibold px-3 py-1">
                                {{ $post->category->nama ?? '-' }}
                            </span>
                            <a href="{{ route('blogpost.show', $post->slug) }}"
                                class="block text-xl font-bold mb-3 text-teal-600 hover:text-teal-500 duration-150">
                                {{ Str::limit($post->judul, 60) }}
                            </a>
                            <div class="flex items-center text-sm text-gray-500 space-x-2">
                                <span>{{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d F Y') }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @if ($postPaginate->hasPages())
                <div class="mt-6 flex justify-center flex-wrap">
                    {{ $postPaginate->links('pagination::tailwind') }}
                </div>
            @endif
        </section>
    </main>

    <x-footer></x-footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

        document.getElementById('searchInput').addEventListener('input', function() {
            let keyword = this.value.trim();
            let resultList = document.getElementById('resultList');

            if (keyword.length < 2) {
                resultList.innerHTML = '';
                return;
            }

            fetch(`/blogSearch?q=${encodeURIComponent(keyword)}`)
                .then(response => response.json())
                .then(data => {
                    let html = '';

                    // ==== KATEGORI ====
                    if (data.categories.length > 0) {
                        html += `
                    <div>
                        <h2 class="font-semibold text-teal-600 mb-2">Kategori:</h2>
                        <ul class="space-y-2">
                `;
                        data.categories.forEach(c => {
                            html += `
                        <li><a href="/blogcategory/${c.slug}" class="text-teal-500 hover:underline text-lg">&#8594; ${c.nama}</a></li>
                    `;
                        });
                        html += '</ul></div>';
                    }

                    // ==== BLOG NEWS ====
                    if (data.news.length > 0) {
                        html += `
                    <div class="mt-6">
                        <h2 class="font-semibold text-teal-600 mb-2">Blog News:</h2>
                        <ul class="space-y-5">
                `;
                        data.news.forEach(n => {
                            html += `
                        <li class="flex items-center">
                            <img src="/storage/${n.gambar}" alt="${n.judul}" class="w-36 h-32 rounded-2xl object-cover">
                            <div class="flex flex-col ml-5">
                                <a href="/blognews/${n.slug}" class="text-teal-600 font-bold mb-2 hover:underline">
                                    ${truncate(n.judul, 50)}
                                </a>
                                <span class="text-gray-400 text-xs">${formatDate(n.created_at)}</span>
                                <a href="/blognews/${n.slug}" class="text-sm text-teal-500 hover:underline mt-2">
                                    Baca selengkapnya →
                                </a>
                            </div>
                        </li>
                    `;
                        });
                        html += '</ul></div>';
                    }

                    // ==== BLOG POST ====
                    if (data.posts.length > 0) {
                        html += `
                    <div class="mt-6">
                        <h2 class="font-semibold text-teal-600 mb-2">Blog Post:</h2>
                        <ul class="space-y-5">
                `;
                        data.posts.forEach(p => {
                            html += `
                        <li class="flex items-center">
                            <img src="/storage/${p.gambar}" alt="${p.judul}" class="w-36 h-32 rounded-2xl object-cover">
                            <div class="flex flex-col ml-5">
                                <a href="/blogpost/${p.slug}" class="text-teal-600 font-bold mb-2 hover:underline">
                                    ${truncate(p.judul, 50)}
                                </a>
                                <span class="text-gray-400 text-xs">${formatDate(p.created_at)}</span>
                                <a href="/blogpost/${p.slug}" class="text-sm text-teal-500 hover:underline mt-2">
                                    Baca selengkapnya →
                                </a>
                            </div>
                        </li>
                    `;
                        });
                        html += '</ul></div>';
                    }

                    // ==== TIDAK ADA HASIL ====
                    if (!html) {
                        html = '<p class="text-gray-400">Tidak ada hasil ditemukan.</p>';
                    }

                    resultList.innerHTML = html;
                });
        });

        // Batasan karakter
        function truncate(str, max) {
            return str.length > max ? str.substring(0, max) + '...' : str;
        }

        // Format Tanggal ke Indonesia
        function formatDate(dateString) {
            const d = new Date(dateString);
            return d.toLocaleDateString('id-ID', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
        }
    </script>
</body>

</html>
