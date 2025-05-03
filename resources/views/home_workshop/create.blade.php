@extends('admin.layout')
@section('content')
  <div class="w-full p-6 bg-gray-100 min-h-screen">
    <div class="w-full  bg-white rounded-lg shadow-md overflow-hidden">
      <div class="bg-teal-300 p-4">
        <h2 class="text-xl font-bold text-teal-800">Buat Workshop</h2>
      </div>

      <form method="POST" action="{{ route('homeworkshop.store') }}" enctype="multipart/form-data" class="p-6">
        @csrf

        <div class="mb-4">
          <label for="judul" class="block text-gray-700 font-medium mb-2">Judul Workshop</label>
          <input type="text" name="judul" id="judul"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"
            value="{{ old('judul') }}" required>

          <p class="text-red-500 text-sm mt-1"></p>

        </div>

        <div class="mb-4">
          <label for="deskripsi" class="block text-gray-700 font-medium mb-2">Deskripsi</label>
          <input type="text" name="deskripsi" id="deskripsi"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"
            value="{{ old('deskripsi') }}" required>

          <p class="text-red-500 text-sm mt-1"></p>

        </div>

        <div class="mb-4">
          <label for="deskripsi" class="block text-gray-700 font-medium mb-2">Lokasi</label>
          <input type="text" name="lokasi" id="lokasi"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"
            value="{{ old('lokasi') }}" required>

          <p class="text-red-500 text-sm mt-1"></p>

        </div>



        <div class="mb-4">
          <label for="waktu_mulai" class="block text-gray-700 font-medium mb-2">Waktu mulai Program</label>
          <input type="datetime-local" name="waktu_mulai" id="waktu_mulai"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"
            value="{{ old('waktu_mulai') }}" required>
          @if ($errors->has('waktu_mulai'))
            <div class="text-red-500 text-sm mt-1">
              {{ $errors->first('waktu_mulai') }}
            </div>
          @endif


        </div>

        <div class="mb-4">
          <label for="waktu_selesai" class="block text-gray-700 font-medium mb-2">waktu selesai Program</label>
          <input type="datetime-local" name="waktu_selesai" id="waktu_selesai"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"
            value="{{ old('waktu_selesai') }}" required>

          @if ($errors->has('waktu_selesai'))
            <div class="text-red-500 text-sm mt-1">
              {{ $errors->first('waktu_selesai') }}
            </div>
          @endif

        </div>

        <div class="mb-4">
          <label for="maks_kapasitas" class="block text-gray-700 font-medium mb-2">Kapasitas</label>
          <input type="text" name="maks_kapasitas" id="maks_kapasitas"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"
            value="{{ old('maks_kapasitas') }}" required>

          <p class="text-red-500 text-sm mt-1"></p>

        </div>

        <div class="mb-4">
          <label for="gambar" class="block text-gray-700 font-medium mb-2">Gambar Program</label>
          <input type="file" name="gambar" id="gambar"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"
            value="{{ old('gambar') }}" required>

          <p class="text-red-500 text-sm mt-1"></p>

        </div>

        <div class="mb-6">
          <label class="flex items-center">
            <input type="checkbox" name="terms" class="form-checkbox h-5 w-5 text-teal-300" required>
            <span class="ml-2 text-gray-700">Saya Sebagai Admin</span>
          </label>

          <p class="text-red-500 text-sm mt-1"></p>

        </div>

        <div class="flex items-center justify-between">
          <button type="submit"
            class="px-6 py-2 bg-teal-300 hover:bg-teal-400 text-teal-800 font-medium rounded-lg">Kirim Ke Halaman
            Home</button>

        </div>
      </form>
    </div>
  </div>
@endsection
