<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumina Health | Konsultasi</title>
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

        <h1 class="text-6xl text-white font-bold">Konsultasi</h1>
        <div class="container">
            <h2>Pilih Staff untuk Konsultasi</h2>
            <ul>
                @foreach ($staffs as $staff)
                    <li class="mb-2">
                        <strong>{{ $staff->nama }}</strong> - {{ $staff->spesialisasi ?? '-' }}
                        <a href="{{ route('konsultasi.mulai', $staff->id) }}" class="ml-3 text-blue-600 underline">Mulai Konsultasi</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>



    <x-footer></x-footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

