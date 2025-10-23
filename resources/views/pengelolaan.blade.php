@extends('layouts.app')

@section('title', 'Pengelolaan Tugas')

@section('content')
    
    <div class="page-cover"></div>

    <div class="container"> <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="mb-0">Daftar Tugas</h1>
            <x-button>
                Tambah Tugas Baru
            </x-button>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                
                <div class="table-responsive-wrapper">
                    <table class="table table-hover mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Tugas</th>
                                <th scope="col">Prioritas</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_tugas as $tugas)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                
                                <td>
                                    <a href="{{ url('/tugas/' . $tugas['id']) }}?username={{ request()->get('username') }}" class="text-nama-tugas">
                                        {{ $tugas['nama'] }}
                                    </a>
                                </td>
                                
                                <td>
                                    @if ($tugas['prioritas'] == 'Tinggi')
                                        <span class="badge badge-red">{{ $tugas['prioritas'] }}</span>
                                    @elseif ($tugas['prioritas'] == 'Medium')
                                        <span class="badge badge-yellow">{{ $tugas['prioritas'] }}</span>
                                    @else
                                        <span class="badge badge-green">{{ $tugas['prioritas'] }}</span>
                                    @endif
                                </td>
                                
                                <td>
                                    @if ($tugas['status'] == 'Pending')
                                        <span class="badge badge-red">{{ $tugas['status'] }}</span>
                                    @else
                                        <span class="badge badge-green">{{ $tugas['status'] }}</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection