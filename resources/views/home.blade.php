<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- <title>{{ config('app.name', 'Lumina Health') }}</title> --}}
  <title>Lumina Health | Home</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="bg-teal-50">

  <x-header></x-header>

  <main class="w-full flex items-center justify-center -mt-1">
    <x-navbar></x-navbar>
  </main>

  {{-- First Page --}}
  <main
    class="w-full h-screen text-white -mt-9 px-32 py-24 bg-gradient-to-r from-teal-400 via-teal-500 to-teal-400 rounded-b-[30%] flex justify-end">

    <div class="flex flex-col">
      <div
        class="flex justify-center items-center gap-x-2 px-4 py-1 mb-7 rounded-full border border-white  w-max h-max">
        <img src="/images/heart.png" alt="heart" class="w-5 h-5">
        <P class="font-semibold">Kesehatan & Jasmani</P>
      </div>

      <h1 class="text-5xl font-bold">Program Kesehatan</h1>
      <h1 class="text-5xl font-bold text-teal-300">Terbaik</h1>
      <p class="text-lg">Penyedia program dan layanan kesehatan terbaik di dunia,</p>
      <p class="text-lg">dijamin kesehatan Anda mencapai titik tertinggi</p>

      <button
        class="w-max h-max px-7 py-2 mt-5 rounded-full bg-teal-300 text-white text-lg font-semibold hover:bg-teal-500 duration-200 cursor-pointer">
        Selengkapnya
      </button>
    </div>


    <div
      class="w-6xl h-64 left-16 gap-x-10 bg-gradient-to-b from-teal-300 to-teal-400 rounded-xl flex flex-row-reverse items-center absolute mt-96 p-10">
      <div class="flex flex-col justify-start items-start">
        <img src="/images/service.png" alt="service" class="w-20 h-20 bg-white rounded-full p-3">
        <h1 class="text-white font-bold text-2xl">Pelayanan Cepat</h1>
        <p>Pelayanan yang cepat</p>
        <p>untuk Anda kapan pun.</p>
      </div>

      <div class="flex flex-col justify-start items-start">
        <img src="/images/service.png" alt="service" class="w-20 h-20 bg-white rounded-full p-3">
        <h1 class="text-white font-bold text-2xl">24 Jam Layanan Darurat</h1>
        <p>Layanan yang tersedia</p>
        <p>untuk Anda selama 24 jam.</p>
      </div>

    </div>

    <img src="/images/doctor.jpeg" alt="healt"
      class="rounded-b-[45%] rounded-t-[45%] w-md h-max object-contain absolute left-40">

  </main>

  {{-- Konsultan --}}
  <main data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="700"
    data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-start"
    class="w-full h-max flex flex-col items-center px-28 pt-60">
    <section
      class="flex justify-center items-center gap-x-2 px-4 py-1 mb-10 rounded-full border border-teal-400  w-max h-max">
      <img src="/images/heart-rate.png" alt="heart" class="w-5 h-5">
      <P class="font-semibold text-teal-400">Konsultan</P>
    </section>

    <section class="flex flex-col items-center">
      <h1 class="text-5xl text-teal-500 font-bold">Kami Adalah Konsultan Terbaik</h1>
      <h1 class="text-5xl text-teal-700 font-bold">Di Lumina Health</h1>
    </section>

    <section class="flex w-full mt-16">

      <img src="/images/consultation-2.jpg" alt="Konsultasi" class="w-80 rounded-3xl">

      <div class="flex flex-col ml-14">
        <div class=" w-96 h-max flex flex-wrap">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi repudiandae quisquam, voluptas
          aliquid
          odio error eos quos laudantium sit eaque?
        </div>

        <div class="rounded-md space-y-2 mt-5 text-teal-600">
          <div class="flex items-start gap-x-2">
            <svg class="w-4 h-4 mt-1" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414L9 13.414l4.707-4.707z"
                clip-rule="evenodd" />
            </svg>
            <p>Dolor necessitatibus faucibus wisi.</p>
          </div>
          <div class="flex items-start gap-x-2">
            <svg class="w-4 h-4 mt-1" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414L9 13.414l4.707-4.707z"
                clip-rule="evenodd" />
            </svg>
            <p>Quibusdam ab ex pulvinar fugit.</p>
          </div>
          <div class="flex items-start gap-x-2">
            <svg class="w-4 h-4 mt-1" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414L9 13.414l4.707-4.707z"
                clip-rule="evenodd" />
            </svg>
            <p>Itaque illo eiusmod pede ornare.</p>
          </div>
          <div class="flex items-start gap-x-2">
            <svg class="w-4 h-4 mt-1" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414L9 13.414l4.707-4.707z"
                clip-rule="evenodd" />
            </svg>
            <p>Sequi rem iaculis posuere pede viera.</p>
          </div>
        </div>
      </div>

      <div class="w-80 h-max ml-5 p-9 rounded-4xl bg-teal-500 flex flex-col items-center">
        <div class="w-full h-max py-2 rounded-full bg-white flex items-center justify-center">
          <span class="text-teal-400 font-semibold text-lg">Jam Buka</span>
        </div>
        <p class="my-5 text-white font-bold text-lg">Jadwal dan jam buka kami.</p>
        <div class="flex flex-col gap-y-2 items-center text-white font-bold">
          <h1>Senin - Jumat: 08.00 - 22.00</h1>
          <div class="w-full h-0.5 bg-white opacity-30"></div>
          <h1>Sabtu - Minggu: 07.00 - 20.00</h1>
          <div class="w-full h-0.5 bg-white opacity-30"></div>
          <h1>24 Jam Terbuka Layanan Darurat</h1>
        </div>
      </div>

      <img src="/images/consultation-1.jpg" alt="Konsultasi"
        class="absolute -z-50 right-28 rounded-2xl w-3xl h-96 mt-64">

    </section>
  </main>

  {{-- Program Unggulan --}}
  <main data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="700"
    data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-start"
    class="w-full h-max flex flex-col px-28 mt-40 ">

    <section
      class="flex justify-center items-center gap-x-2 px-4 py-1 mb-10 rounded-full border border-teal-400  w-max h-max">
      <img src="/images/heart-rate.png" alt="heart" class="w-5 h-5">
      <P class="font-semibold text-teal-400">Program Kesehatan</P>
    </section>

    <section class="flex w-full justify-between">
      <div class="flex flex-col">
        <h1 class="text-4xl text-teal-500 font-bold">Program Kesehatan</h1>
        <h1 class="text-4xl text-teal-700 font-bold">Kami</h1>
      </div>

      <div class="flex flex-col text-teal-600">
        <p>Program terbaik yang kami sediakan untuk</p>
        <p>Anda yang ingin mencapai kesehatan maksimal</p>
        <p>Dengan mudah dan nyaman.</p>
      </div>

      <a href="{{ route('page.program') }}"
        class="w-max h-max px-7 py-2 mt-5 rounded-full bg-teal-500 text-white text-lg font-semibold hover:bg-teal-700 duration-200 cursor-pointer">
        Program Kesehatan
      </a>
    </section>

    <section class="grid grid-cols-3 gap-x-5 gap-y-5 mt-16">
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
               @if (Auth::guard('akun_user')->check() && Auth::guard('akun_user')->user()->programs->contains($programs->id))

    <div class="text-green-500 font-semibold">Selamat! Anda telah bergabung di program ini</div>
    @else
    <form action="{{ route('program.join', $programs->id) }}" method="POST">
    @csrf
              <button type="submit"
                class="w-full py-2 rounded-full border border-teal-500 text-teal-300 hover:text-white hover:bg-teal-500 duration-200 font-semibold cursor-pointer">
                Ikuti Program
              </button>
            </form>
            @endif
            </x-slot:detail>

          </x-card>
        @endif
      @endforeach
    </section>
    {{ $program->links() }}

  </main>

  {{-- Workshop --}}
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
        @foreach ($workshop as $item)
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
        @endforeach
      </div>
    </section>
    {{ $workshop->links() }}

  </main>
  <div class="flex flex-col justify-center items-center gap-10 mt-20">
    <h1 class="text-4xl text-teal-500 font-bold">Jumlah Member Berdasarkan Umur</h1>

    <div id="chart"></div>
  </div>
  <x-footer></x-footer>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


  <script>
    AOS.init();

    var options = {
      chart: {
        type: 'bar',
        height: 400,
        width: 1050
      },
      series: [{
        name: 'Jumlah User',
        data: {!! json_encode($data->pluck('total')) !!}
      }],
      xaxis: {
        categories: {!! json_encode($data->pluck('umur')) !!},
        title: {
          text: 'Umur',
          style: {
            fontSize: '14px',
            fontWeight: 'bold'
          }
        }
      },
      yaxis: {
        title: {
          text: 'Jumlah User',
          style: {
            fontSize: '14px',
            fontWeight: 'bold'
          }
        }
      },
      plotOptions: {
        bar: {
          distributed: true, // aktifkan warna beda tiap bar
          borderRadius: 4
        }
      },
      colors: ['#008FFB', '#00E396', '#FEB019', '#FF4560', '#775DD0', '#3F51B5', '#F86624'], // bisa ditambah
      dataLabels: {
        enabled: true
      }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
  </script>

</body>

</html>
