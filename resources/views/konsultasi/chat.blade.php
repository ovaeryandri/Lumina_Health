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

    <div class="container">
      <h3>Chat dengan {{ $konsultasi->staff->nama }}</h3>

      <div class="bg-gray-100 p-4 rounded h-64 overflow-y-scroll mb-4 space-y-2">
        @foreach ($pesans as $pesan)
          <div class="flex {{ $pesan->pengirim_type === 'staff' ? 'justify-end' : 'justify-start' }}">
            <div
              class="max-w-xs px-4 py-2 rounded shadow
                            {{ $pesan->pengirim_type === 'staff' ? 'bg-blue-500 text-white' : 'bg-white text-gray-800' }}">
              <strong>
                {{ $pesan->pengirim_type === 'staff' ? $konsultasi->staff->nama : $konsultasi->user->nama }}
              </strong>
              <div>{{ $pesan->pesan }}</div>
            </div>
          </div>
        @endforeach
      </div>

      <form action="{{ route('konsultasi.kirim', $konsultasi->id) }}" method="POST">
        @csrf
        <textarea name="pesan" class="w-full border p-2" required></textarea>
        <button type="submit" class="mt-2 px-4 py-2 bg-blue-500 text-white">Kirim</button>
      </form>
    </div>
  </main>



  <x-footer></x-footer>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>
