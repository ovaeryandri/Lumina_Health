@extends('admin.layout')
@section('content')
    <div class="w-full p-6 bg-gray-100 min-h-screen">
        <div class="w-full  bg-white rounded-lg shadow-md overflow-hidden">
            <div class="bg-teal-300 p-4">
                <h2 class="text-xl font-bold text-teal-800">Ubah Kategori Blog</h2>
            </div>

            <form method="POST" action="{{ route('blogcategory.update', $category->slug) }}" enctype="multipart/form-data"
                class="p-6">
                @method('PUT')
                @csrf

                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 font-medium mb-2">Nama Kategori</label>
                    <input type="text" name="nama" id="nama"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"
                        value="{{ $category->judul }}">

                    <p class="text-red-500 text-sm mt-1"></p>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="px-6 py-2 bg-teal-300 hover:bg-teal-400 text-teal-800 font-medium rounded-lg">Ubah</button>

                </div>
            </form>
        </div>
    </div>
@endsection
