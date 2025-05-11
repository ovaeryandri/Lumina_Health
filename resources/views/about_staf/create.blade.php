@extends('admin.layout')
@section('content')

<div class="w-full p-6 bg-gray-100 min-h-screen">
    <div class="w-full  bg-white rounded-lg shadow-md overflow-hidden">
        <div class="bg-teal-300 p-4">
            <h2 class="text-xl font-bold text-teal-800">Staf Akun</h2>
        </div>

        <form method="POST" action="{{ route('aboutstaff.store') }}" enctype="multipart/form-data" class="p-6">
            @csrf

            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ old('nama') }}" required>

                @error('nama')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-4">
                <label for="spesialisasi" class="block text-gray-700 font-medium mb-2">Spesialis</label>
                <input type="text" name="spesialisasi" id="spesialisasi" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ old('spesialisasi') }}" required>

                @error('spesialisasi')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            </div>

            <div class="mb-4">
                <label for="bio" class="block text-gray-700 font-medium mb-2">Bio</label>
                <input type="text" name="bio" id="bio" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ old('bio') }}" required>

                @error('bio')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            </div>

            <div class="mb-4">
                <label for="tahun_pengalaman" class="block text-gray-700 font-medium mb-2">Tahun Pengalaman</label>
                <input type="number" name="tahun_pengalaman" id="tahun_pengalaman" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ old('tahun_pengalaman') }}" required>

                @error('tahun_pengalaman')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ old('email') }}" required>

                @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            </div>

            <div class="mb-4">
                <label for="no_hp" class="block text-gray-700 font-medium mb-2">No HP</label>
                <input type="number" name="no_hp" id="no_hp" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ old('no_hp') }}" required>

                @error('no_hp')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            </div>

            <div class="mb-4">
                <label for="foto_profil" class="block text-gray-700 font-medium mb-2">Foto Profil</label>
                <input type="file" name="foto_profil" id="foto_profil" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-300" value="{{ old('foto_profil') }}" required>

                @error('foto_profil')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            </div>

            <div class="mb-6">
                <label class="flex items-center">
                    <input type="checkbox" name="terms" class="form-checkbox h-5 w-5 text-teal-300" required>
                    <span class="ml-2 text-gray-700">Saya Sebagai Admin</span>
                </label>

                    <p class="text-red-500 text-sm mt-1"></p>

            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="px-6 py-2 bg-teal-300 hover:bg-teal-400 text-teal-800 font-medium rounded-lg">Daftar</button>

            </div>
        </form>
    </div>
</div>
@endsection
