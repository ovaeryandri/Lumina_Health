@extends('admin.layout')
@section('content')
<div class="w-full p-6 bg-gray-100 ">
    <div class="w-full bg-white rounded-lg shadow-md overflow-hidden">
        <div class="bg-teal-300 p-4">
            <h2 class="text-xl font-bold text-teal-800">Form Pendaftaran Workshop</h2>
        </div>

        <form method="POST" action="" class="p-6">
            @csrf
            <div class="mb-6">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-teal-300">
                            <th class="p-3 text-left text-teal-800 border border-teal-400">No</th>
                            <th class="p-3 text-left text-teal-800 border border-teal-400">Nama</th>
                            <th class="p-3 text-left text-teal-800 border border-teal-400">Alamat</th>
                            <th class="p-3 text-left text-teal-800 border border-teal-400">No hp</th>
                            <th class="p-3 text-left text-teal-800 border border-teal-400">Tujuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop data dari controller Laravel -->
                        <?php
                            $no = 1;
                        ?>
                        @foreach ($workshop as $workshops)

                        <tr class="hover:bg-gray-50">
                            <td class="p-3 border border-gray-200">
                                {{ $no++ }}
                            </td>

                            <td class="p-3 border border-gray-200">
                                {{ $workshops->nama }}
                            </td>

                            <td class="p-3 border border-gray-200">
                                {{ $workshops->alamat }}
                            </td>

                            <td class="p-3 border border-gray-200">
                                {{ $workshops->no_hp }}
                            </td>

                            <td class="p-3 border border-gray-200">
                                {{ $workshops->tujuan }}
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>


        </form>
    </div>
</div>

<!-- Script untuk konfirmasi delete -->

@endsection
