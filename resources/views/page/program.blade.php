<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumina Health | Program Unggulan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="bg-teal-50">
    <x-header></x-header>

    <main class="w-full flex items-center justify-center -mt-1">
        <x-navbar></x-navbar>
    </main>

    <main
        class="w-full h-max text-white -mt-9 px-32 py-28 bg-gradient-to-r from-teal-400 via-teal-500 to-teal-400 flex justify-center items-center">

        <h1 class="text-6xl text-white font-bold">Program Unggulan</h1>
    </main>

    <main class="w-full h-max flex flex-col px-28 mt-20">

        <section class="grid grid-cols-3 flex-wrap gap-x-5 gap-y-5 mt-16">
            @foreach ($program as $programs)
                @php
                    $tgl_mulai = \Carbon\Carbon::parse($programs->tgl_mulai);
                    $tgl_selesai = \Carbon\Carbon::parse($programs->tgl_selesai);
                    $today = \Carbon\Carbon::today();
                @endphp

                @if ($today->lt($tgl_selesai))
                    <x-card nomor="{{ $loop->iteration }}">
                        <x-slot:judul class="line-clamp-1">
                            <div class="flex items-center justify-between gap-3">
                                <h1 class="text-teal-700 text-2xl mt-5 font-semibold">{{ $programs->judul }}</h1>
                                <span
                                    class=" bg-teal-300 text-white px-2 py-2 rounded-es-xl rounded-tr-2xl absolute z-[0] -mt-11 ml-[230px]">
                                    @php
                                        $daysLeft = $today->diffInDays($tgl_selesai);
                                    @endphp

                                    @if ($daysLeft > 1)
                                        Berakhir {{ $daysLeft }} hari lagi
                                    @elseif ($daysLeft == 1)
                                        Berakhir besok
                                    @endif
                                </span>
                            </div>
                        </x-slot:judul>

                        <x-slot:gambar>
                            <img src="{{ Storage::url($programs->gambar) }}" class="w-full h-56 object-fill rounded-xl">
                        </x-slot:gambar>

                        <x-slot:deskripsi>
                            <p class="line-clamp-1">{{ $programs->deskripsi }}</p>
                        </x-slot:deskripsi>

                        <x-slot:detail>
                            <div class="hidden">
                                <a href="#" class="text-teal-300 hover:text-teal-500 duration-200 font-semibold">
                                    Lebih lanjut...
                                </a>
                            </div>
                        </x-slot:detail>
                    </x-card>
                @endif
            @endforeach
        </section>

    </main>

    <x-footer></x-footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
