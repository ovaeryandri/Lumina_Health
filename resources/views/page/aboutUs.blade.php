<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumina Health | Tentang Kami</title>
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

        <h1 class="text-6xl text-white font-bold">Tentang Kami</h1>
    </main>

    <main data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="700"
        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-start"
        class="w-full h-max flex flex-col px-28 mt-20">
        <section class="w-full h-max flex">
            <img src="/images/we.jpeg" alt="Lumina Health" class="w-md rounded-2xl">
            <div class="flex flex-col ml-10">
                <section
                    class="flex justify-center items-center gap-x-2 px-4 py-1 mb-5 rounded-full border border-teal-400  w-max h-max">
                    <img src="/images/heart-rate.png" alt="heart" class="w-5 h-5">
                    <P class="font-semibold text-teal-400">Tentang Kami</P>
                </section>

                <h1 class="text-5xl font-bold text-teal-400">Sejarah Kami</h1>

                <p class="w-xl flex flex-wrap mt-5 text-sm text-teal-600 font-semibold text-justify">
                    Lumina Health hadir sejak tahun 2025 dengan semangat untuk menjadi pusat informasi dan layanan
                    kesehatan yang mudah diakses oleh semua orang. Tidak hanya menyediakan artikel kesehatan yang akurat
                    dan terpercaya, kami juga menghadirkan layanan konsultasi daring, program kesehatan yang
                    terstruktur, serta workshop edukatif bagi masyarakat. Dengan dukungan tenaga medis profesional dan
                    edukator berpengalaman, kami berkomitmen untuk membantu setiap individu hidup lebih sehat, sadar,
                    dan teredukasi.
                </p>

            </div>
        </section>

        <section class="flex w-full mt-7">
            <div class="flex flex-col">
                <h1 class="text-5xl font-bold text-teal-400">Visi & Misi</h1>

                <p class="w-md flex flex-wrap mt-5 text-sm text-teal-600 font-semibold text-justify">
                    Kami memiliki visi untuk menjadi platform kesehatan digital terpercaya yang mendorong masyarakat
                    hidup lebih sehat, sadar, dan berkualitas. Untuk mencapainya, kami berkomitmen menyediakan informasi
                    kesehatan yang akurat dan mudah dipahami, memberikan layanan konsultasi dengan tenaga profesional,
                    mengembangkan program kesehatan yang sesuai kebutuhan, serta menyelenggarakan workshop untuk
                    meningkatkan kesadaran dan pengetahuan masyarakat akan pentingnya menjaga kesehatan.
                </p>
            </div>
            <img src="/images/visi-misi.jpeg" alt="visimisi" class="w-xl h-60 rounded-2xl ml-10 -mt-20">
        </section>
    </main>

    <main data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="700"
        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-start"
        class="w-full h-max flex flex-col items-center px-28 mt-20">
        <section
            class="flex justify-center items-center gap-x-2 px-4 py-1 mb-10 rounded-full border border-teal-400  w-max h-max">
            <img src="/images/heart-rate.png" alt="heart" class="w-5 h-5">
            <P class="font-semibold text-teal-400">Program Unggulan</P>
        </section>

        <section class="flex flex-col items-center text-teal-600 mb-10">
            <p>Program terbaik yang kami sediakan untuk</p>
            <p>Anda yang ingin mencapai kesehatan maksimal</p>
            <p>Dengan mudah dan nyaman.</p>
        </section>

        <section class="w-full flex flex-wrap justify-center gap-5">
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg w-max flex flex-col items-center">
                <img src="/images/consultation-2.jpg" alt="konsultasi"
                    class="w-80 h-44 object-cover border-8 border-white rounded-t-2xl">

                <div
                    class="w-max h-max p-3 border-2 border-teal-500 rounded-full bg-white flex justify-center items-center -mt-20">
                    <img src="/images/heart-2.png" alt="Konsultasi" class="p-2 w-24 h-24">
                </div>

                <h1 class="text-2xl font-bold mb-5 mt-3 text-teal-600 hover:text-teal-500 duration-150">
                    Konsultasi
                </h1>
            </div>

            {{-- <div class="bg-white rounded-2xl overflow-hidden shadow-lg w-max flex flex-col items-center">
                <img src="/images/health-program.jpeg" alt="konsultasi"
                    class="w-80 h-44 object-cover border-8 border-white rounded-t-2xl">

                <div
                    class="w-max h-max p-3 border-2 border-teal-500 rounded-full bg-white flex justify-center items-center -mt-20">
                    <img src="/images/health-program.png" alt="Konsultasi" class="p-2 w-24 h-24">
                </div>

                <h1 class="text-2xl font-bold mb-5 mt-3 text-teal-600 hover:text-teal-500 duration-150">
                    Program Kesehatan
                </h1>
            </div> --}}

            <div class="bg-white rounded-2xl overflow-hidden shadow-lg w-max flex flex-col items-center">
                <img src="/images/health-workshop.jpeg" alt="konsultasi"
                    class="w-80 h-44 object-cover border-8 border-white rounded-t-2xl">

                <div
                    class="w-max h-max p-3 border-2 border-teal-500 rounded-full bg-white flex justify-center items-center -mt-20">
                    <img src="/images/heart-2.png" alt="Konsultasi" class="p-2 w-24 h-24">
                </div>

                <h1 class="text-2xl font-bold mb-5 mt-3 text-teal-600 hover:text-teal-500 duration-150">
                    Workshop Kesehatan
                </h1>
            </div>

        </section>
    </main>

    <main data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="700"
        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-start"
        class="w-full h-max flex flex-col px-28 mt-20">

        <section
            class="flex justify-center items-center gap-x-2 px-4 py-1 mb-10 rounded-full border border-teal-400  w-max h-max">
            <img src="/images/heart-rate.png" alt="heart" class="w-5 h-5">
            <P class="font-semibold text-teal-400">Spesialis Kami</P>
        </section>

        <section class="flex w-full justify-between">
            <div class="flex flex-col">
                <h1 class="text-4xl text-teal-500 font-bold">Tenaga Medis Kami</h1>
                <h1 class="text-4xl text-teal-700 font-bold">yang Berkualifikasi Terbaik</h1>
            </div>

            <div class="flex flex-col text-teal-600">
                <p>Spesialis terbaik yang kami sediakan untuk</p>
                <p>Anda yang ingin mencapai kesehatan maksimal</p>
                <p>Dengan mudah dan nyaman.</p>
            </div>
        </section>

        <section class="flex flex-wrap justify-center w-full h-max gap-6 mt-10">
            <div
                class="flex flex-col items-center p-8 bg-white rounded-3xl hover:shadow-2xl hover:shadow-teal-200 duration-300 hover:-translate-y-3 relative">
                <div class="flex w-full justify-between items-center">
                    <div class="flex flex-col">
                        <h1 class="text-2xl text-teal-600 font-bold">Rafi</h1>
                        <p class="text-sm font-semibold text-emerald-400">Spesialis Gizi</p>
                    </div>
                    <img src="/images/heart-2.png" alt="heart" class="w-12 h-12">
                </div>

                <div
                    class="w-max h-max mt-5 flex items-center justify-center rounded-full bg-white p-2 border-2 border-teal-600">
                    <img src="/images/doctor-3.png" alt="doctor" class="object-fill rounded-full w-64 h-64">
                </div>

                <button
                    class="w-full py-3 mt-3 rounded-full bg-white text-sm font-bold text-teal-500 border border-teal-500 hover:text-white hover:bg-teal-500 duration-200">Konsultasi</button>

            </div>

            <div
                class="flex flex-col items-center p-8 bg-white rounded-3xl hover:shadow-2xl hover:shadow-teal-200 duration-300 hover:-translate-y-3 relative">
                <div class="flex w-full justify-between items-center">
                    <div class="flex flex-col">
                        <h1 class="text-2xl text-teal-600 font-bold">Dr. Rafi</h1>
                        <p class="text-sm font-semibold text-emerald-400">Spesialis Kebugaran & Olahraga</p>
                    </div>
                    <img src="/images/heart-2.png" alt="heart" class="w-12 h-12">
                </div>

                <div
                    class="w-max h-max mt-5 flex items-center justify-center rounded-full bg-white p-2 border-2 border-teal-600">
                    <img src="/images/doctor-3.png" alt="doctor" class="object-fill rounded-full w-64 h-64">
                </div>

                <button
                    class="w-full py-3 mt-3 rounded-full bg-white text-sm font-bold text-teal-500 border border-teal-500 hover:text-white hover:bg-teal-500 duration-200">Konsultasi</button>

            </div>

            <div
                class="flex flex-col items-center p-8 bg-white rounded-3xl hover:shadow-2xl hover:shadow-teal-200 duration-300 hover:-translate-y-3 relative">
                <div class="flex w-full justify-between items-center">
                    <div class="flex flex-col">
                        <h1 class="text-2xl text-teal-600 font-bold">Dr. Rafi</h1>
                        <p class="text-sm font-semibold text-emerald-400">Spesialis Kesehetan</p>
                    </div>
                    <img src="/images/heart-2.png" alt="heart" class="w-12 h-12">
                </div>

                <div
                    class="w-max h-max mt-5 flex items-center justify-center rounded-full bg-white p-2 border-2 border-teal-600">
                    <img src="/images/doctor-3.png" alt="doctor" class="object-fill rounded-full w-64 h-64">
                </div>

                <button
                    class="w-full py-3 mt-3 rounded-full bg-white text-sm font-bold text-teal-500 border border-teal-500 hover:text-white hover:bg-teal-500 duration-200">Konsultasi</button>
            </div>

            <div
                class="flex flex-col items-center p-8 bg-white rounded-3xl hover:shadow-2xl hover:shadow-teal-200 duration-300 hover:-translate-y-3 relative">
                <div class="flex w-full justify-between items-center">
                    <div class="flex flex-col">
                        <h1 class="text-2xl text-teal-600 font-bold">Dr. Rafi</h1>
                        <p class="text-sm font-semibold text-emerald-400">Spesialis Psikologi</p>
                    </div>
                    <img src="/images/heart-2.png" alt="heart" class="w-12 h-12">
                </div>

                <div
                    class="w-max h-max mt-5 flex items-center justify-center rounded-full bg-white p-2 border-2 border-teal-600">
                    <img src="/images/doctor-3.png" alt="doctor" class="object-fill rounded-full w-64 h-64">
                </div>

                <button
                    class="w-full py-3 mt-3 rounded-full bg-white text-sm font-bold text-teal-500 border border-teal-500 hover:text-white hover:bg-teal-500 duration-200">Konsultasi</button>
            </div>

        </section>

    </main>

    <x-footer></x-footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
