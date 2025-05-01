<div
    class="flex flex-col  py-7 px-7 bg-white rounded-3xl hover:shadow-2xl hover:shadow-teal-200 duration-300 hover:-translate-y-3 relative">

    <div class="flex items-center gap-x-5">

        <div class="flex flex-col">
            {{ $judul }}
        </div>
    </div>

    <div class="mt-5">
        {{ $gambar }}
    </div>

    <div class="w-20 h-20 absolute mt-36 ml-12 bg-teal-400 opacity-10 rounded-full"></div>

    <div class="flex flex-col mt-5 text-teal-500">
        {{ $deskripsi }}
    </div>

    <div class="mt-5">
        <a href="#" class="text-teal-300 hover:text-teal-500 duration-200 font-semibold">
            {{ $detail }}
        </a>
    </div>
</div>
