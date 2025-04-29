@extends('admin.layout')
@section('content')
  <div class="w-full p-6 bg-gray-100 min-h-screen">
    <div class="w-full  bg-white rounded-lg shadow-md overflow-hidden">
      <div class="bg-teal-300 p-4">
        <h2 class="text-xl font-bold text-teal-800">Ubah Workshop</h2>
      </div>
      @if (session('success'))
        <div class="text-green-500">
          {{ session('success') }}
        </div>
      @endif
      @if ($errors->any())
        <div class="text-red-500">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form method="POST" action="{{ route('homeworkshop.update', $workshop->id) }}" enctype="multipart/form-data"
        class="p-6">
        @method('PUT')
        @csrf

        <div class="mb-4">
          <label for="judul" class="block text-gray-700 font-medium mb-2">Judul Program</label>
          <input type="text" name="judul" id="judul"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"
            value="{{ $workshop->judul }}">

          <p class="text-red-500 text-sm mt-1"></p>

        </div>

        <div class="mb-4">
          <label for="deskripsi" class="block text-gray-700 font-medium mb-2">Deskripsi</label>
          <input type="text" name="deskripsi" id="deskripsi"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"
            value="{{ $workshop->deskripsi }}">

          <p class="text-red-500 text-sm mt-1"></p>

        </div>

        <div class="mb-4">
          <label for="loakasi" class="block text-gray-700 font-medium mb-2">Lokasi</label>
          <input type="text" name="lokasi" id="lokasi"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"
            value="{{ $workshop->lokasi }}">

          <p class="text-red-500 text-sm mt-1"></p>

        </div>

        <div class="mb-4">
          <label for="tgl_mulai" class="block text-gray-700 font-medium mb-2">tanggal mulai Program</label>
          <input type="datetime-local" name="tgl_mulai" id="tgl_mulai" value="{{ $workshop->waktu_mulai }}">

          <p class="text-red-500 text-sm mt-1"></p>

        </div>

        <div class="mb-4">
          <label for="tgl_selesai" class="block text-gray-700 font-medium mb-2">Tanggal selesai Program</label>
          <input type="datetime-local" name="tgl_selesai" id="tgl_selesai" value="{{ $workshop->waktu_selesai }}">

          <p class="text-red-500 text-sm mt-1"></p>

        </div>

        <div class="mb-4">
          <label for="kapasitas" class="block text-gray-700 font-medium mb-2">Kapasitas</label>
          <input type="text" name="kapasitas" id="kapasitas"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300"
            value="{{ $workshop->maks_kapasitas }}">

          <p class="text-red-500 text-sm mt-1"></p>

        </div>

        <div class="mb-4">
          <label for="gambar" class="block text-gray-700 font-medium mb-2">Gambar Program</label>

          <!-- Tampilkan gambar lama -->
          @if ($workshop->gambar)
            <img src="{{ asset('storage/' . $workshop->gambar) }}" class="w-32 h-32 object-cover mb-2"
              alt="Gambar Program">
          @endif

          <input type="file" name="gambar" id="gambar"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300">
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
