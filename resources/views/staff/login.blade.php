@extends('admin.layout')

@section('content')
<div class="container">
    <h2>Login Staff</h2>
    <form method="POST" action="{{ route('staff.login') }}">
        @csrf
        <input type="email" name="email" class="block w-full p-2 my-2 border" placeholder="Email" required>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white">Login</button>
    </form>
</div>
@endsection
