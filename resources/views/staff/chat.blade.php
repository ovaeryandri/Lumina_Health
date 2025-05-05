@extends('admin.layout')

@section('content')
<div class="container">
    <h3>Chat dengan {{ $konsultasi->user->nama }}</h3>

    <div class="bg-gray-100 p-4 rounded h-64 overflow-y-scroll mb-4">
        @foreach ($pesans->reverse() as $pesan)
            <div class="mb-2">
                <strong>{{ $pesan->pengirim_type === 'staff' ? 'Saya' : $konsultasi->user->nama }}:</strong>
                {{ $pesan->pesan }}
            </div>
        @endforeach
    </div>

    <form action="{{ route('konsultasi.kirim', $konsultasi->id) }}" method="POST">
        @csrf
        <textarea name="pesan" class="w-full border p-2" required></textarea>
        <button type="submit" class="mt-2 px-4 py-2 bg-blue-500 text-white">Kirim</button>
    </form>
</div>
@endsection
