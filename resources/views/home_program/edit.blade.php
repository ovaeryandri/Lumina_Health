@extends('admin.layout')
@section('content')

<div class="w-full p-6 bg-gray-100 min-h-screen">
    <div class="w-full  bg-white rounded-lg shadow-md overflow-hidden">
        <div class="bg-teal-300 p-4">
            <h2 class="text-xl font-bold text-teal-800">Ubah Home Program</h2>
        </div>

        <form method="POST" action="{{ route('homeprogram.update',$program->id) }}" enctype="multipart/form-data" class="p-6">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label for="judul" class="block text-gray-700 font-medium mb-2">Judul Program</label>
                <input type="text" name="judul" id="judul" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ $program->judul }}">

                    <p class="text-red-500 text-sm mt-1"></p>

            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700 font-medium mb-2">Deskripsi Program</label>
                <input type="text" name="deskripsi" id="deskripsi" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ $program->deskripsi }}">

                    <p class="text-red-500 text-sm mt-1"></p>

            </div>

            <div class="mb-4">
                <label for="gambar" class="block text-gray-700 font-medium mb-2">Gambar Program</label>

                @if($program->gambar)
                    <img src="{{ asset('storage/'.$program->gambar) }}" class="w-32 h-32 object-cover mb-2" alt="Gambar Program">
                @endif

                <input type="file" name="gambar" id="gambar" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300">
                <p class="text-red-500 text-sm mt-1"></p>
            </div>

            <div class="mb-4">
                <label for="tgl_mulai" class="block text-gray-700 font-medium mb-2">tanggal mulai Program</label>
                <input type="date" name="tgl_mulai" id="tgl_mulai" value="{{ \Carbon\Carbon::parse($program->tgl_mulai)->format('Y-m-d') }}">

                    <p class="text-red-500 text-sm mt-1"></p>

            </div>

            <div class="mb-4">
                <label for="tgl_selesai" class="block text-gray-700 font-medium mb-2">Tanggal selesai Program</label>
                <input type="date" name="tgl_selesai" id="tgl_selesai" value="{{ \Carbon\Carbon::parse($program->tgl_selesai)->format('Y-m-d') }}">

                    <p class="text-red-500 text-sm mt-1"></p>

            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="px-6 py-2 bg-teal-300 hover:bg-teal-400 text-teal-800 font-medium rounded-lg">Ubah</button>

            </div>
        </form>
    </div>
</div>
@endsection
