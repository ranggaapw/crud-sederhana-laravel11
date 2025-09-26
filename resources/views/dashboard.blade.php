@extends('layout')

@section('konten')
<div class="container py-4">
    <h3>Selamat datang, {{ auth()->user()->name }}</h3>
    <p class="text-muted">Ini adalah dashboard admin.</p>

    <form action="{{ route('logout') }}" method="POST" class="d-inline">
        @csrf
        <button class="btn btn-danger btn-sm">Logout</button>
    </form>

    <a href="{{ route('siswa.tampil') }}" class="btn btn-primary btn-sm ms-2">Kelola Data Siswa</a>
</div>
@endsection
