@extends('layouts.app')

@section('title', $tugas['nama'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h1 class="mb-0">{{ $tugas['nama'] }}</h1>
                </div>
                <div class="card-body">
                    <p class="fs-5">{{ $tugas['deskripsi'] }}</p>
                    <hr>
                    <p>
                        <strong>Prioritas:</strong> 
                        <span class="badge 
                            @if ($tugas['prioritas'] == 'Tinggi') badge-red
                            @elseif ($tugas['prioritas'] == 'Medium') badge-yellow
                            @else badge-green
                            @endif
                        ">
                            {{ $tugas['prioritas'] }}
                        </span>
                    </p>
                    <p>
                        <strong>Status:</strong> 
                        <span class="badge 
                            @if ($tugas['status'] == 'Pending') badge-red
                            @else badge-green
                            @endif
                        ">
                            {{ $tugas['status'] }}
                        </span>
                    </p>

                    <a href="{{ url('/pengelolaan') }}?username={{ request()->get('username') }}" class="btn btn-primary mt-3">
                        &laquo; Kembali ke Daftar Tugas
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection