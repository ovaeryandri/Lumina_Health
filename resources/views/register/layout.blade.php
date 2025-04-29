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
        <section class="w-full h-full bg-teal-500 rounded-l-2xl px-5 py-8 pb-12 flex flex-col items-center">
            <h1 class="text-white font-bold text-3xl">Daftar Sekarang</h1>
            <div class="flex flex-col w-full items-center text-white font-semibold text-sm mt-5">
                <p>Buat akun baru dan</p>
                <p>mulai menjelajahi layanan hebat Kami!</p>
            </div>

            <img src="/images/register.png" alt="" class="h-96 mt-10">
        </section>

        <form class="w-full h-full rounded-r-2xl flex flex-col items-center px-20 py-8 pb-12">
            <h1 class="text-black font-bold text-2xl">Buat Akun Baru</h1>

            <div class="flex w-full gap-x-3 h-max mt-10">
                <div class="flex flex-col w-full relative">
                    <label for="nama" class="text-black font-semibold text-sm mb-1">Nama</label>
                    <img src="/images/user.png" alt="user" class="absolute left-3 top-8 flex items-center w-6 h-6">
                    <input type="text" name="nama" id="" required placeholder="Nama Anda"
                        class="w-full h-max py-2 pl-11 pr-3 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
                </div>

                <div class="flex flex-col w-full relative">
                    <label for="umur" class="text-black font-semibold text-sm mb-1">Umur</label>
                    <img src="/images/user.png" alt="user" class="absolute left-3 top-8 flex items-center w-6 h-6">
                    <input type="text" name="umur" id="" required placeholder="Umur Anda"
                        class="w-full h-max py-2 pl-11 pr-3 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
                </div>
            </div>

            <div class="flex flex-col w-full relative mt-3">
                <label for="jenis_kelamin" class="text-black font-semibold text-sm mb-1">Jenis Kelamin</label>
                <img src="/images/gender.png" alt="" class="absolute left-3 top-8 flex items-center w-6 h-6">
                <select name="jenis_kelamin" id="jenis_kelamin" required
                    class="w-full h-max py-2 pl-11 pr-3 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Pria</option>
                    <option value="Perempuan">Wanita</option>
                </select>
            </div>

            {{-- <div class="flex flex-col w-full relative mt-3">
                <label for="no_hp" class="text-black font-semibold text-sm mb-1">No. Hp</label>
                <img src="/images/phone.png" alt="" class="absolute left-3 top-8 flex items-center w-6 h-6">
                <input type="text" name="no_hp" id="" required placeholder="No. Hp Anda"
                    class="w-full h-max py-2 pl-11 pr-3 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
            </div> --}}

            <div class="flex flex-col w-full mt-3 relative">
                <label for="email" class="text-black font-semibold text-sm mb-1">Email</label>
                <img src="/images/email-2.png" alt="email" class="absolute left-3 top-8 flex items-center w-6 h-6">
                <input type="email" name="email" id="" required placeholder="Email Anda"
                    class="w-full h-max py-2 pl-11 pr-3 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
            </div>

            <div class="flex flex-col w-full mt-3 relative">
                <label for="password" class="text-black font-semibold text-sm mb-1">Kata Sandi</label>
                <img src="/images/lock.png" alt="lock" class="absolute left-3 top-8 flex items-center w-6 h-6">
                <input type="password" name="password" id="passwordInput" required placeholder="Kata Sandi Anda"
                    class="w-full h-max py-2 pl-11 pr-3 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
                <button type="button" id="togglePassword"
                    class="absolute right-3 top-9 text-gray-400 hover:text-gray-600">
                    <!-- Icon Mata -->
                    <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>

            {{-- <div class="flex flex-col w-full mt-3 relative">
                <label for="confirm_password" class="text-black font-semibold text-sm mb-1">Kata Sandi</label>
                <img src="/images/lock.png" alt="lock" class="absolute left-3 top-8 flex items-center w-6 h-6">
                <input type="password" name="confirm_password" id="passwordConfirmInput" required
                    placeholder="Masukkan Ulang Kata Sandi"
                    class="w-full h-max py-2 pl-11 pr-3 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
                <button type="button" id="toggleConfirmPassword"
                    class="absolute right-3 top-9 text-gray-400 hover:text-gray-600">
                    <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div> --}}

            <div class="flex w-full mt-3">
                <input type="checkbox" required class="mr-1">
                <p class="text-sm text-slate-600 font-semibold cursor-default">Saya setuju dengan syarat & ketentuan
                </p>
            </div>

            <button
                class="w-full bg-teal-500 py-2 rounded-xl text-white font-bold mt-5 cursor-pointer hover:bg-green-600 duration-150">
                Daftar
            </button>

            <div class="flex text-sm text-slate-600 font-semibold mt-5">
                <p class="mr-1">Sudah punya akun?</p>
                <a href="{{ route('login.layout') }}" class="hover:underline text-teal-500"> Silahkan Masuk!</a>
            </div>

        </form>
    </main>

    <script>
        // Untuk password
        const passwordInput = document.getElementById('passwordInput');
        const togglePassword = document.getElementById('togglePassword');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            eyeIcon.setAttribute('stroke', type === 'text' ? 'teal' : 'currentColor');
        });

        // Untuk konfirmasi password
        // const passwordConfirmInput = document.getElementById('passwordConfirmInput');
        // const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
        // const eyeConfirmIcon = document.getElementById('eyeConfirmIcon');

        // toggleConfirmPassword.addEventListener('click', function() {
        //     const type = passwordConfirmInput.getAttribute('type') === 'password' ? 'text' : 'password';
        //     passwordConfirmInput.setAttribute('type', type);
        //     eyeConfirmIcon.setAttribute('stroke', type === 'text' ? 'teal' : 'currentColor');
        // });
    </script>

</body>

</html>
