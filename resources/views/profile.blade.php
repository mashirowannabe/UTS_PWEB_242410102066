@extends('layouts.app')

@section('title', 'Profile Pengguna')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header">
            <h1>Profile Saya</h1>
        </div>
        <div class="card-body">
            <p>Ini adalah halaman profil Anda.</p>
            
            <h3 class="card-title">Username: <span class="text-primary">{{ request()->get('username') }}</span></h3>
        </div>
    </div>
</div>
@endsection