@extends('admin.layout')
@section('content')

<div class="w-full p-6 bg-gray-100 min-h-screen">
    <div class="w-full  bg-white rounded-lg shadow-md overflow-hidden">
        <div class="bg-teal-300 p-4">
            <h2 class="text-xl font-bold text-teal-800">Ubah Galery</h2>
        </div>

        <form method="POST" action="{{ route('galerydokumentasi.update',$galeri->id) }}">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-medium mb-2">Nama Galery</label>
                <input type="text" name="nama" id="nama" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ $galeri->nama }}">

                @error('nama')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
             @enderror
            </div>

            <div class="mb-4">
                <label for="tanggal" class="block text-gray-700 font-medium mb-2">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"
                value="{{ \Carbon\Carbon::parse($galeri->tanggal)->format('Y-m-d') }}">

                @error('tanggal')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
             @enderror

            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700 font-medium mb-2">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"  value="{{ $galeri->deskripsi }}">

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
