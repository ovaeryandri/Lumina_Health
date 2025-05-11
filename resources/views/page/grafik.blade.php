<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumina Health | Grafik</title>
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

        <h1 class="text-6xl text-white font-bold">Grafik</h1>

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
