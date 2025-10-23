@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-5 fw-bold">Selamat datang, {{ request()->get('username') }}!</h1>
            <p class="fs-4">Ini adalah halaman dashboard Task Manager Anda.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h1 class="display-4">{{ $totalTugas }}</h1>
                    <p class="fs-5">Total Tugas</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h1 class="display-4 badge-red">{{ $tugasPending }}</h1>
                    <p class="fs-5">Tugas Pending</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h1 class="display-4 badge-green">{{ $tugasSelesai }}</h1>
                    <p class="fs-5">Tugas Selesai</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection