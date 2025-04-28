<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Lumina Healt | Register</title>
</head>

<body class="bg-teal-50 flex items-center justify-center my-5 overflow-hidden">

    <main class="w-9/12 max-h-screen rounded-2xl flex shadow-2xl">
        <section class="w-full h-full bg-green-500 rounded-l-2xl px-5 py-8 pb-12 flex flex-col items-center">
            <h1 class="text-white font-bold text-3xl">Daftar Sekarang</h1>
            <div class="flex flex-col w-full items-center text-white font-semibold text-sm mt-5">
                <p>Buat akun baru dan</p>
                <p>mulai menjelajahi layanan hebat Kami!</p>
            </div>

            <img src="/images/register.png" alt="" class="h-96 mt-10">
        </section>

        <form class="w-full h-full rounded-r-2xl flex flex-col items-center px-20 py-8 pb-12">
            <h1 class="text-black font-bold text-2xl">Buat Akun Baru</h1>

            <div class="flex flex-col w-full mt-10 relative">
                <label for="name" class="text-black font-semibold text-sm mb-1">Nama</label>
                <img src="/images/user.png" alt="user" class="absolute left-3 top-8 flex items-center w-6 h-6">
                <input type="text" name="name" id="" required placeholder="Masukkan Nama"
                    class="w-full h-max py-2 px-11 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
            </div>

            <div class="flex flex-col w-full mt-3 relative">
                <label for="email" class="text-black font-semibold text-sm mb-1">Email</label>
                <img src="/images/email-2.png" alt="email" class="absolute left-3 top-8 flex items-center w-6 h-6">
                <input type="email" name="email" id="" required placeholder="Masukkan Email"
                    class="w-full h-max py-2 px-11 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
            </div>

            <div class="flex flex-col w-full mt-3 relative">
                <label for="password" class="text-black font-semibold text-sm mb-1">Kata Sandi</label>
                <img src="/images/lock.png" alt="lock" class="absolute left-3 top-8 flex items-center w-6 h-6">
                <input type="password" name="password" id="" required placeholder="Masukkan Kata Sandi"
                    class="w-full h-max py-2 px-11 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
            </div>

            <div class="flex flex-col w-full mt-3 relative">
                <label for="confirm_password" class="text-black font-semibold text-sm mb-1">Kata Sandi</label>
                <img src="/images/lock.png" alt="lock" class="absolute left-3 top-8 flex items-center w-6 h-6">
                <input type="password" name="confirm_password" id="" required
                    placeholder="Masukkan Ulang Kata Sandi"
                    class="w-full h-max py-2 px-11 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
            </div>

            <div class="flex w-full mt-5">
                <input type="checkbox" required class="mr-1">
                <p class="text-sm text-slate-600 font-semibold cursor-default">Saya setuju dengan syarat & ketentuan</p>
            </div>

            <button
                class="w-full bg-green-500 py-2 rounded-xl text-white font-bold mt-5 cursor-pointer hover:bg-green-600 duration-150">
                Daftar
            </button>

            <div class="flex text-sm text-slate-600 font-semibold mt-5">
                <p class="mr-1">Sudah punya akun?</p>
                <a href="{{ route('login.layout') }}" class="hover:underline text-teal-500"> Silahkan Masuk!</a>
            </div>

        </form>
    </main>

</body>

</html>
