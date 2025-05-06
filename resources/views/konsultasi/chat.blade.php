@extends('admin.layout')

@section('content')
<div class="container">
    <h3>Chat dengan {{ $konsultasi->staff->nama }}</h3>

    <div class="bg-gray-100 p-4 rounded h-64 overflow-y-scroll mb-4 space-y-2">
        @foreach ($pesans as $pesan)
            <div class="flex {{ $pesan->pengirim_type === 'staff' ? 'justify-end' : 'justify-start' }}">
                <div class="max-w-xs px-4 py-2 rounded shadow
                    {{ $pesan->pengirim_type === 'staff' ? 'bg-blue-500 text-white' : 'bg-white text-gray-800' }}">
                    <strong>
                        {{ $pesan->pengirim_type === 'staff' ? $konsultasi->staff->nama : $konsultasi->user->nama }}
                    </strong>
                    <div>{{ $pesan->pesan }}</div>
                </div>
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
