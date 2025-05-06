<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <div class="w-screen h-screen flex justify-center items-center">
    <form action="{{ route('prosesloginadmin') }}" method="POST"
      class="w-150 rounded-r-2xl flex flex-col justify-center items-center px-20 py-8 pb-12">

      @csrf
      @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <h1 class="text-black font-bold text-2xl">Silahkan Login</h1>

      <div class="flex flex-col w-full mt-10 relative">
        <label for="email" class="text-black font-semibold text-sm mb-1">Username</label>
        <img src="/images/email-2.png" alt="email" class="absolute left-3 top-8 flex items-center w-6 h-6">
        <input type="text" name="username" id="" required placeholder="Masukkan Username"
          class="w-full h-max py-2 px-11 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
      </div>

      <div class="flex flex-col w-full mt-5 relative">
        <label for="password" class="text-black font-semibold text-sm mb-1">Kata Sandi</label>
        <img src="/images/lock.png" alt="email" class="absolute left-3 top-8 flex items-center w-6 h-6">
        <input type="password" name="password" id="passwordInput" required placeholder="Masukkan Kata Sandi"
          class="w-full h-max py-2 px-11 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">

        <button type="button" id="togglePassword" class="absolute right-3 top-9 text-gray-400 hover:text-gray-600">
          <!-- Icon Mata -->
          <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
          </svg>
        </button>
      </div>

      <button type="submit"
        class="w-full bg-teal-500 py-2 rounded-xl text-white font-bold mt-7 cursor-pointer hover:bg-teal-600 duration-150">
        Masuk
      </button>



    </form>
  </div>

  <script>
    const passwordInput = document.getElementById('passwordInput');
    const togglePassword = document.getElementById('togglePassword');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePassword.addEventListener('click', function() {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);

      if (type === 'text') {
        eyeIcon.setAttribute('stroke', 'teal');
      } else {
        eyeIcon.setAttribute('stroke', 'currentColor');
      }
    });
  </script>
</body>

</html>
