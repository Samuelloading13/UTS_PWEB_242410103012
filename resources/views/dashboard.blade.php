@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Selamat datang, {{ request('username') }}!</h2>
    <p>Ini adalah halaman dashboard utama.</p>
    <p>Anda telah berhasil login.</p>
@endsection
