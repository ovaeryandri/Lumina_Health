@extends('admin.layout')
@section('content')
  <div class="w-full p-6 bg-gray-100 ">
    <div class="w-full bg-white rounded-lg shadow-md overflow-hidden">
      <div class="bg-teal-300 p-4">
        <h2 class="text-xl font-bold text-teal-800">Data Workshop</h2>
      </div>

      <form method="POST" action="" enctype="multipart/form-data" class="p-6">
        @csrf
        <div class="mb-6">
          <table class="w-full border-collapse">
            <thead>
              <tr class="bg-teal-300">
                <th class="p-3 text-left text-teal-800 border border-teal-400">No</th>
                <th class="p-3 text-left text-teal-800 border border-teal-400">Judul</th>
                <th class="p-3 text-left text-teal-800 border border-teal-400">Deskripsi</th>
                <th class="p-3 text-left text-teal-800 border border-teal-400">Lokasi</th>
                <th class="p-3 text-left text-teal-800 border border-teal-400">Waktu Mulai</th>
                <th class="p-3 text-left text-teal-800 border border-teal-400">Waktu Selesai</th>
                <th class="p-3 text-left text-teal-800 border border-teal-400">Kapasitas</th>
                <th class="p-3 text-left text-teal-800 border border-teal-400">Gambar</th>
                <th class="p-3 text-left text-teal-800 border border-teal-400">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <!-- Loop data dari controller Laravel -->
              <?php
              $no = 1;
              ?>
              @foreach ($workshops as $workshop)
                <tr class="hover:bg-gray-50">
                  <td class="p-3 border border-gray-200">
                    {{ $no++ }}
                  </td>

                  <td class="p-3 border border-gray-200">
                    {{ $workshop->judul }}
                  </td>

                  <td class="p-3 border border-gray-200">
                    {{ $workshop->deskripsi }}
                  </td>

                  <td class="p-3 border border-gray-200">
                    {{ $workshop->lokasi }}
                  </td>

                  <td class="p-3 border border-gray-200">
                    {{ \Carbon\Carbon::parse($workshop->waktu_mulai)->format('Y-m-d | H:i') }}
                  </td>

                  <td class="p-3 border border-gray-200">
                    {{ \Carbon\Carbon::parse($workshop->waktu_selesai)->format('Y-m-d | H:i') }}
                  </td>

                  <td class="p-3 border border-gray-200">
                    {{ $workshop->maks_kapasitas }}
                  </td>

                  <td class="p-3 border border-gray-200">


                    <a href="{{ Storage::url($workshop->gambar) }}" target="_blank"
                      class="px-6 py-2 bg-teal-300 hover:bg-teal-400 text-teal-800 font-medium rounded-lg">
                      Lihat
                    </a>

                  </td>

                  <td class="p-3 border border-gray-200">
                    <div class="flex space-x-2">
                      <a href="{{ route('homeworkshop.edit', $workshop->id) }}"
                        class="px-3 py-1 bg-teal-300 hover:bg-teal-400 text-teal-800 rounded">Edit</a>

                      <form action="{{ route('homeworkshop.destroy', $workshop->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                          class="px-3 py-1 bg-red-300 hover:bg-red-400 text-red-800 rounded">Hapus</button>
                      </form>
                    </div>
                  </td>
                </tr>
              @endforeach

            </tbody>
          </table>
        </div>

        <div class="mt-6">
          <a href="{{ route('homeworkshop.create') }}"
            class="px-4 py-2 bg-teal-300 hover:bg-teal-400 text-teal-800 rounded">Tambah Data</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Script untuk konfirmasi delete -->
@endsection
