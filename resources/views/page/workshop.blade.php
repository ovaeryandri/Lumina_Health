<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lumina Health | Workshop</title>
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

    <h1 class="text-6xl text-white font-bold">Workshop</h1>
  </main>

  <main class="w-full h-max flex flex-col px-28 mt-20" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
    data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
    data-aos-anchor-placement="top-start">
    <section
      class="flex justify-center items-center gap-x-2 px-4 py-1 mb-10 rounded-full border border-teal-400  w-max h-max">
      <img src="/images/superior.png" alt="heart" class="w-5 h-5">
      <P class="font-semibold text-teal-400">Workshop</P>
    </section>

    <section class="flex w-full h-max justify-between">
      <h1 class="text-4xl text-teal-500 font-bold">Workshop Kami</h1>
      <div class="flex flex-col text-teal-600">
        <p>Workshop kami tersedia di berbagai tempat dan daerah</p>
        <p>yang bisa Anda kunjungi sesuai dengan jam kerja Kami.</p>
      </div>
    </section>

    <section class="flex flex-wrap w-full mt-16">
      <div class="grid md:grid-cols-3 gap-5">
        @foreach ($workshops as $item)
        @php
    $waktu_selesai = \Carbon\Carbon::parse($item->waktu_selesai);
    $today = \Carbon\Carbon::today();
    $isExpired = $today->gt($waktu_selesai); // true jika sudah lewat
  @endphp

      @if ($today->lte($waktu_selesai))


          <x-workshop-card :id="$item->id">

            <x-slot:image>
              <img src="{{ Storage::url($item->gambar) }}"
                class="w-full h-52 object-cover border-8 border-white rounded-t-2xl">
            </x-slot:image>

            <x-slot:location>
              <p>{{ $item->lokasi }}</p>
            </x-slot:location>

            <x-slot:title>
              <p>{{ $item->judul }}</p>
            </x-slot:title>

            <x-slot:quota>
              <p>{{ $item->maks_kapasitas }} Orang</p>
            </x-slot:quota>

            <x-slot:date class="flex items-center">
              <p>{{ $item->waktu_mulai }} <span class="text-teal-500">s/d</span> </p>
              <p>{{ $item->waktu_selesai }}</p>
            </x-slot:date>

            <x-slot:deskripsi>
              <p>{{ $item->deskripsi }}</p>
            </x-slot:deskripsi>

            <x-slot:button>
                @if (Auth::guard('akun_user')->check() && Auth::guard('akun_user')->user()->workshops->contains($item->id))

                <div class="text-green-500 font-semibold">Selamat! Anda telah bergabung di program ini</div>
                @else
                <form action="{{ route('workshop.join', $item->id) }}" method="POST">
                @csrf
                          <button type="submit"
                            class="w-full py-2 rounded-full border border-teal-500 text-teal-300 hover:text-white hover:bg-teal-500 duration-200 font-semibold cursor-pointer">
                            Ikuti Workshop
                          </button>
                        </form>
                        @endif
            </x-slot:button>
          </x-workshop-card>
          @endif
        @endforeach
      </div>
    </section>
    {{ $workshops->links() }}

  </main>

  <x-footer></x-footer>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>
