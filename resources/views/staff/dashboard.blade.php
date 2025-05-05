@extends('admin.layout')

@section('content')
<div class="container">
    <h2>Sesi Konsultasi Aktif</h2>
    @forelse ($konsultasis as $konsultasi)
        <div class="mb-3">
            <strong>User:</strong> {{ $konsultasi->user->nama ?? 'Tidak Ditemukan'}} <br>
            <a href="{{ route('konsultasi.chat', $konsultasi->id) }}" class="text-blue-600 underline">Lihat Chat</a>
        </div>
    @empty
        <p>Belum ada konsultasi aktif.</p>
    @endforelse
</div>
@endsection
