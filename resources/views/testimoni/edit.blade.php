@extends('admin.layout')
@section('content')

<div class="w-full p-6 bg-gray-100 min-h-screen">
    <div class="w-full  bg-white rounded-lg shadow-md overflow-hidden">
        <div class="bg-teal-300 p-4">
            <h2 class="text-xl font-bold text-teal-800">Ubah Testimoni</h2>
        </div>

        <form method="POST" action="{{ route('galerytestimonivideo.update',$testimoni->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label for="judul" class="block text-gray-700 font-medium mb-2">Judul</label>
                <input type="text" name="judul" id="judul" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ $testimoni->judul }}">

                @error('judul')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
             @enderror
            </div>

            <div class="mb-4">
                <label for="file_video" class="block text-gray-700 font-medium mb-2">Video</label>
                <input type="file" name="file_video" id="file_video" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ $testimoni->file_video }}">

                @if($testimoni->file_video)
                <video width="320" height="240" controls>
                    <source src="{{ asset('storage/' . $testimoni->file_video) }}" type="video/mp4">
                </video>
            @endif

            <input type="file" name="file_video" id="file_video" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300">
           @error('file_video')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700 font-medium mb-2">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"  value="{{ $testimoni->deskripsi }}">

                @error('deskripsi')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
             @enderror

            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="px-6 py-2 bg-teal-300 hover:bg-teal-400 text-teal-800 font-medium rounded-lg">Ubah</button>

            </div>
        </form>
    </div>
</div>
@endsection
