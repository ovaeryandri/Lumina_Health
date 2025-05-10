@extends('admin.layout')
@section('content')
    <div class="w-full p-6 bg-gray-100 min-h-screen">
        <div class="w-full  bg-white rounded-lg shadow-md overflow-hidden">
            <div class="bg-teal-300 p-4">
                <h2 class="text-xl font-bold text-teal-800">Edit Blog Post</h2>
            </div>

            <form method="POST" action="{{ route('blogpost.update', $post->slug) }}" enctype="multipart/form-data"
                class="p-6">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="id_blog_category" class="form-label"
                        class="block text-gray-700 font-medium mb-2">Kategori</label>
                    <select name="id_blog_category" id="id_blog_category"
                        class="form-control w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"
                        required>
                        <option value="" disabled selected>-- Pilih Kategori --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $post->id_blog_category == $category->id ? 'selected' : '' }}>
                                {{ $category->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" id="judul"
                        class="form-control w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"
                        required value="{{ $post->judul }}">
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea name="content" id="content"
                        class="form-control w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"
                        rows="5" required>{{ $post->content }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="block text-gray-700 font-medium mb-2">Gambar</label>

                    @if ($post->gambar)
                        <img src="{{ asset('storage/' . $post->gambar) }}" class="w-32 h-32 object-cover mb-2"
                            alt="Gambar Program">
                    @endif

                    <input type="file" name="gambar" id="gambar"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300">
                    <p class="text-red-500 text-sm mt-1"></p>
                </div>

                <div class="mb-3">
                    <label for="tanggal_upload" class="form-label">Tanggal Upload</label>
                    <input type="date" name="tanggal_upload" id="tanggal_upload"
                        class="form-control w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"
                        required value="{{ \Carbon\Carbon::parse($post->tanggal_upload)->format('Y-m-d') }}">
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="px-6 py-2 bg-teal-300 hover:bg-teal-400 text-teal-800 font-medium rounded-lg">
                        Ubah
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
