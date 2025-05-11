@extends('admin.layout')
@section('content')

<div class="w-full p-6 bg-gray-100 min-h-screen">
    <div class="w-full  bg-white rounded-lg shadow-md overflow-hidden">
        <div class="bg-teal-300 p-4">
            <h2 class="text-xl font-bold text-teal-800">Ubah Staff</h2>
        </div>

        <form method="POST" action="{{ route('aboutstaff.update',$staf->id) }}" enctype="multipart/form-data" class="p-6">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-medium mb-2">Nama Staff</label>
                <input type="text" name="nama" id="nama" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ $staf->nama }}">

                @error('nama')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
             @enderror


            </div>

            <div class="mb-4">
                <label for="spesialisasi" class="block text-gray-700 font-medium mb-2">spesialisasi</label>
                <input type="text" name="spesialisasi" id="spesialisasi" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ $staf->spesialisasi }}">

                   @error('spesialisasi')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror


            </div>

            <div class="mb-4">
                <label for="bio" class="block text-gray-700 font-medium mb-2">Bio</label>
                <input type="text" name="bio" id="bio" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ $staf->bio }}">

                   @error('bio')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror


            </div>

            <div class="mb-4">
                <label for="tahun_pengalaman" class="block text-gray-700 font-medium mb-2">Tahun Pengalaman</label>
                <input type="number" name="tahun_pengalaman" id="tahun_pengalaman" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ $staf->tahun_pengalaman }}">

                   @error('tahun_pengalaman')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror


            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ $staf->email }}">

                   @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror


            </div>

            <div class="mb-4">
                <label for="no_hp" class="block text-gray-700 font-medium mb-2">No HP</label>
                <input type="number" name="no_hp" id="no_hp" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ $staf->no_hp }}">

                   @error('no_hp')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror


            </div>

            <div class="mb-4">
                <label for="foto_profil" class="block text-gray-700 font-medium mb-2"></label>

                @if($staf->foto_profil)
                    <img src="{{ asset('storage/'.$staf->foto_profil) }}" class="w-32 h-32 object-cover mb-2" alt="foto_profil Program">
                @endif

                <input type="file" name="foto_profil" id="foto_profil" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300">
               @error('foto_profil')
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
