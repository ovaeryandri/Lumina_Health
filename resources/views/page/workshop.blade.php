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

    <main class="w-full h-max flex px-28 mt-20">

        <section class="flex flex-wrap w-full mt-16">
            <div class="grid md:grid-cols-3 gap-5">
                <x-workshop-card>
                    <x-slot:image>
                        <img src="/images/consultation-1.jpg"
                            class="w-full h-52 object-cover border-8 border-white rounded-t-2xl">
                    </x-slot:image>
                    <x-slot:location>
                        Pangkalpinang, Bangka Belitung
                    </x-slot:location>
                    <x-slot:title>
                        Medical Care Need To Be Trustworthy
                    </x-slot:title>
                    <x-slot:quota>
                        50 Orang
                    </x-slot:quota>
                    <x-slot:date>
                        28 April s/d 10 Mei 2025
                    </x-slot:date>
                    <x-slot:deskripsi>
                        asjdkahdkajhdsjkahd
                    </x-slot:deskripsi>
                </x-workshop-card>

                <x-workshop-card>
                    <x-slot:image>
                        <img src="/images/consultation-1.jpg"
                            class="w-full h-52 object-cover border-8 border-white rounded-t-2xl">
                    </x-slot:image>
                    <x-slot:location>
                        Pangkalpinang, Bangka Belitung
                    </x-slot:location>
                    <x-slot:title>
                        Medical Care Need To Be Trustworthy
                    </x-slot:title>
                    <x-slot:quota>
                        50 Orang
                    </x-slot:quota>
                    <x-slot:date>
                        28 April s/d 10 Mei 2025
                    </x-slot:date>
                    <x-slot:deskripsi>
                        asjdkahdkajhdsjkahd
                    </x-slot:deskripsi>
                </x-workshop-card>

                <x-workshop-card>
                    <x-slot:image>
                        <img src="/images/consultation-1.jpg"
                            class="w-full h-52 object-cover border-8 border-white rounded-t-2xl">
                    </x-slot:image>
                    <x-slot:location>
                        Pangkalpinang, Bangka Belitung
                    </x-slot:location>
                    <x-slot:title>
                        Medical Care Need To Be Trustworthy
                    </x-slot:title>
                    <x-slot:quota>
                        50 Orang
                    </x-slot:quota>
                    <x-slot:date>
                        28 April s/d 10 Mei 2025
                    </x-slot:date>
                    <x-slot:deskripsi>
                        asjdkahdkajhdsjkahd
                    </x-slot:deskripsi>
                </x-workshop-card>
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
