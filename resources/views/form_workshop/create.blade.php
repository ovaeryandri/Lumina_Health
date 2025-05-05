<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Workshop</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>
<body>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-xl w-full bg-white p-10 rounded-2xl shadow-lg">
            <h2 class="text-3xl font-bold text-teal-600 mb-6 text-center">Pendaftaran Workshop</h2>


            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-3 rounded mb-4">{{ session('success') }}</div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 text-red-700 p-3 rounded mb-4">{{ session('error') }}</div>
            @endif

            <form action="{{ route('formworkshop.store') }}" method="POST" class="space-y-5">
                @csrf
                <input type="hidden" name="id_home_workshops" value="{{ $workshop->id }}">

                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-teal-300 focus:border-teal-300">
                    @error('nama')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="3" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-teal-300 focus:border-teal-300">{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="no_hp" class="block text-sm font-medium text-gray-700">Nomor HP</label>
                    <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp') }}" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-teal-300 focus:border-teal-300">
                    @error('no_hp')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="tujuan" class="block text-sm font-medium text-gray-700">Tujuan Mengikuti Workshop</label>
                    <textarea name="tujuan" id="tujuan" rows="3" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-teal-300 focus:border-teal-300">{{ old('tujuan') }}</textarea>
                    @error('tujuan')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                        class="w-full bg-teal-300 hover:bg-teal-400 text-white font-semibold py-2 px-4 rounded-md shadow transition">
                        Daftar Sekarang
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>

