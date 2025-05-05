@extends('admin.layout')

@section('content')
<div class="container">
    <h2>Pilih Staff untuk Konsultasi</h2>
    <ul>
        @foreach ($staffs as $staff)
            <li class="mb-2">
                <strong>{{ $staff->nama }}</strong> - {{ $staff->spesialisasi ?? '-' }}
                <a href="{{ route('konsultasi.mulai', $staff->id) }}" class="ml-3 text-blue-600 underline">Mulai Konsultasi</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
