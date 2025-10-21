@extends('layouts.app')

@section('title', 'Profile Pengguna')

@section('content')
    <div class="profile-card">
        <h2>Detail Profile Anda</h2>
        <div class="profile-item">
            <label>Username (dari Login)</label>
            <span>{{ request('username') }}</span>
        </div>
        <div class="profile-item">
            <label>Nama Lengkap</label>
            <span>Samuel Gurning</span>
        </div>
        <div class="profile-item">
            <label>NIM</label>
            <span>242410103012</span>
        </div>
        <div class="profile-item">
            <label>Program Studi</label>
            <span>Informatika</span>
        </div>
    </div>
@endsection
