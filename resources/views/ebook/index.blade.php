@extends('admin.layout')
@section('content')
<div class="w-full p-6 bg-gray-100 ">
    <div class="w-full bg-white rounded-lg shadow-md overflow-hidden">
        <div class="bg-teal-300 p-4">
            <h2 class="text-xl font-bold text-teal-800"> Download Ebook</h2>
        </div>

        <form method="POST" action="" class="p-6">
            @csrf
            <div class="mb-6">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-teal-300">
                            <th class="p-3 text-left text-teal-800 border border-teal-400">No</th>
                            <th class="p-3 text-left text-teal-800 border border-teal-400">Nama Ebook</th>
                            <th class="p-3 text-left text-teal-800 border border-teal-400">Gambar</th>
                            <th class="p-3 text-left text-teal-800 border border-teal-400">Deskripsi</th>
                            <th class="p-3 text-left text-teal-800 border border-teal-400">Download</th>
                            <th class="p-3 text-left text-teal-800 border border-teal-400">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        <!-- Loop data dari controller Laravel -->
                        @foreach ($ebook as $ebooks)

                        <tr class="hover:bg-gray-50">
                            <td class="p-3 border border-gray-200">
                                {{$no++}}
                            </td>

                            <td class="p-3 border border-gray-200">
                                {{ $ebooks->nama }}
                            </td>

                            <td class="p-3 border border-gray-200">
                                <a href="{{ Storage::url($ebooks->gambar) }}" target="_blank" class="px-6 py-2 bg-teal-300 hover:bg-teal-400 text-teal-800 font-medium rounded-lg">
                                    Lihat File
                                </a>
                            </td>

                            <td class="p-3 border border-gray-200">
                                {{ $ebooks->deskripsi }}
                            </td>

                            <td class="p-3 border border-gray-200">
                                {{ $ebooks->download }}
                            </td>

                            <td class="p-3 border border-gray-200">
                                <div class="flex space-x-2">
                                    <a href="{{ route('downloadebook.edit', $ebooks->id) }}" class="px-3 py-1 bg-teal-300 hover:bg-teal-400 text-teal-800 rounded">Edit</a>

                                    <form action="{{ route('downloadebook.destroy', $ebooks->id) }}" method="POST">
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
                <a href="{{ route('downloadebook.create') }}" class="px-4 py-2 bg-teal-300 hover:bg-teal-400 text-teal-800 rounded">Tambah Data</a>
            </div>
        </form>
    </div>
</div>

<!-- Script untuk konfirmasi delete -->

@endsection
