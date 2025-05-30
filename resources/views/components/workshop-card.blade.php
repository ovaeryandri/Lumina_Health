<div class="relative bg-white rounded-2xl overflow-hidden shadow-lg">
  <div>
    {{ $image }}
  </div>
  <div class="p-5">
    <span class="absolute top-40 left-5 bg-teal-500 border-2 border-white text-white text-xs font-semibold px-3 py-1">
      {{ $location }}
    </span>
    <a href="#" class="block text-xl font-bold mb-3 text-teal-600 hover:text-teal-500 duration-150">
      {{ $title }}
    </a>
    <div class="flex items-center mt-3 text-sm text-gray-500 justify-between">
      <span>Kuota <span class="text-teal-600 font-semibold">{{ $quota }}</span></span>
      <span>•</span>
      <span>{{ $date }}</span>
    </div>
    <p class="w-full flex flex-wrap mt-2">{{ $deskripsi }}</p>
    <div class="mt-5">

        <button class="text-teal-300 hover:text-teal-500 duration-200 font-semibold">

            {{ $button }}
        </button>

</div>


  </div>

</div>
