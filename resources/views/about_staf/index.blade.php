@extends('admin.layout')
@section('content')
<div class="w-full p-6 bg-gray-100 ">
    <div class="w-full bg-white rounded-lg shadow-md overflow-hidden">
        <div class="bg-teal-300 p-4">
            <h2 class="text-xl font-bold text-teal-800">Data Staf</h2>
        </div>

        <form method="POST" action="" class="p-6">
            @csrf
            <div class="mb-6">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-teal-300">
                            <th class="p-3 text-left text-teal-800 border border-teal-400">No</th>
                            <th class="p-3 text-left text-teal-800 border border-teal-400">Nama</th>
                            <th class="p-3 text-left text-teal-800 border border-teal-400">Spesialis</th>
                            <th class="p-3 text-left text-teal-800 border border-teal-400">Bio</th>
                            <th class="p-3 text-left text-teal-800 border border-teal-400">Tahun Pengalaman</th>
                            <th class="p-3 text-left text-teal-800 border border-teal-400">Email</th>
                            <th class="p-3 text-left text-teal-800 border border-teal-400">No HP</th>
                            <th class="p-3 text-left text-teal-800 border border-teal-400">Foto Profil</th>
                            <th class="p-3 text-left text-teal-800 border border-teal-400">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        <!-- Loop data dari controller Laravel -->
                        @foreach ($staf as $staff)

                        <tr class="hover:bg-gray-50">
                            <td class="p-3 border border-gray-200">
                                {{$no++}}
                            </td>

                            <td class="p-3 border border-gray-200">
                                {{ $staff->nama }}
                            </td>

                            <td class="p-3 border border-gray-200">
                                {{ $staff->spesialisasi }}
                            </td>

                            <td class="p-3 border border-gray-200">
                                {{ $staff->bio }}
                            </td>

                            <td class="p-3 border border-gray-200">
                                {{ $staff->tahun_pengalaman }} Tahun
                            </td>

                            <td class="p-3 border border-gray-200">
                                {{ $staff->email }}
                            </td>

                            <td class="p-3 border border-gray-200">
                                {{ $staff->no_hp }}
                            </td>

                            <td class="p-3 border border-gray-200">


                                <a href="{{ Storage::url($staff->foto_profil) }}" target="_blank" class="px-6 py-2 bg-teal-300 hover:bg-teal-400 text-teal-800 font-medium rounded-lg">
                                    Lihat File
                                </a>

                            </td>

                            <td class="p-3 border border-gray-200">
                                <div class="flex space-x-2">
                                    <a href="{{ route('aboutstaff.edit', $staff->id) }}" class="px-3 py-1 bg-teal-300 hover:bg-teal-400 text-teal-800 rounded">Edit</a>

                                    <form action="{{ route('aboutstaff.destroy', $staff->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1 bg-red-300 hover:bg-red-400 text-red-800 rounded">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                <a href="{{ route('aboutstaff.create') }}" class="px-4 py-2 bg-teal-300 hover:bg-teal-400 text-teal-800 rounded">Tambah Data</a>
            </div>
        </form>
    </div>
</div>

<!-- Script untuk konfirmasi delete -->

@endsection
