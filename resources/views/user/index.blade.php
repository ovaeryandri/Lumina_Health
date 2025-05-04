@extends('admin.layout')
@section('content')
  <div class="w-full p-6 bg-gray-100 ">
    <div class="w-full bg-white rounded-lg shadow-md overflow-hidden">
      <div class="bg-teal-300 p-4">
        <h2 class="text-xl font-bold text-teal-800">Data User</h2>
      </div>


      <div class="mb-6 p-6">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-teal-300">
              <th class="p-3 text-left text-teal-800 border border-teal-400">No</th>
              <th class="p-3 text-left text-teal-800 border border-teal-400">Nama</th>
              <th class="p-3 text-left text-teal-800 border border-teal-400">Email</th>
              <th class="p-3 text-left text-teal-800 border border-teal-400">Umur</th>
              <th class="p-3 text-left text-teal-800 border border-teal-400">Jenis Kelamin</th>
            </tr>
          </thead>
          <tbody>
            <!-- Loop data dari controller Laravel -->
            <?php
            $no = 1;
            ?>
            @foreach ($users as $user)
              <tr class="hover:bg-gray-50">
                <td class="p-3 border border-gray-200">
                  {{ $no++ }}
                </td>

                <td class="p-3 border border-gray-200">
                  {{ $user->nama }}
                </td>
                <td class="p-3 border border-gray-200">
                  {{ $user->email }}
                </td>
                <td class="p-3 border border-gray-200">
                  {{ $user->umur }}
                </td>
                <td class="p-3 border border-gray-200">
                  {{ $user->kelamin }}
                </td>

              </tr>
            @endforeach

          </tbody>
        </table>
      </div>



    </div>
  </div>

  <!-- Script untuk konfirmasi delete -->
@endsection
