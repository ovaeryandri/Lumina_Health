@extends('admin.layout')
@section('content')

<div class="w-full p-6 bg-gray-100 min-h-screen">
    <div class="w-full  bg-white rounded-lg shadow-md overflow-hidden">
        <div class="bg-teal-300 p-4">
            <h2 class="text-xl font-bold text-teal-800">Ubah Ebook</h2>
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

        <form method="POST" action="{{ route('downloadebook.update',$ebook->id) }}" enctype="multipart/form-data" class="p-6" >
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label for="gambar" class="block text-gray-700 font-medium mb-2">Gambar</label>

                <div class="mb-4">

                    <!-- Tampilkan gambar lama -->
                    @if($ebook->gambar)
                        <img src="{{ asset('storage/'.$ebook->gambar) }}" class="w-32 h-32 object-cover mb-2" alt="gambar Program">
                    @endif

                </div>

                <input type="file" name="gambar" id="gambar" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ $ebook->gambar }}">

                   @error('gambar')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

            </div>

            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-medium mb-2">Nama Ebook</label>
                <input type="text" name="nama" id="nama" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ $ebook->nama }}">

                @error('nama')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
             @enderror


            </div>



            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700 font-medium mb-2">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ $ebook->deskripsi }}">

                   @error('deskripsi')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror


            </div>

            <div class="mb-4">
                <label for="download" class="block text-gray-700 font-medium mb-2">Download</label>
                <input type="text" name="download" id="download" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ $ebook->download }}">

                   @error('download')
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
