<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $dataTugas = [
        [
            'id' => 1,
            'nama' => 'Kerjakan UTS PWEB',
            'prioritas' => 'Tinggi',
            'status' => 'Pending',
            'deskripsi' => 'Buat proyek mini Laravel sesuai ketentuan. Pastikan semua poin terpenuhi, terutama routing, controller, dan blade.'
        ],
        [
            'id' => 2,
            'nama' => 'Turu',
            'prioritas' => 'Medium',
            'status' => 'Pending',
            'deskripsi' => 'Istirahat yang cukup ya muah.'
        ],
        [
            'id' => 3,
            'nama' => 'Manajemen dan kewirausahaan',
            'prioritas' => 'Rendah',
            'status' => 'Selesai',
            'deskripsi' => 'Jualan tapi gatau kapan wkwk.'
        ],
        [
            'id' => 4,
            'nama' => 'UI UX',
            'prioritas' => 'Medium',
            'status' => 'Selesai',
            'deskripsi' => 'Wireframe LO-FI sama bab 3.'
        ]
    ];


    public function showLogin()
    {
        return view('login');
    }

    public function showDashboard()
    {
        $totalTugas = count($this->dataTugas);
        $tugasPending = 0;
        foreach ($this->dataTugas as $tugas) {
            if ($tugas['status'] == 'Pending') {
                $tugasPending++;
            }
        }
        $tugasSelesai = $totalTugas - $tugasPending;

        return view('dashboard', [
            'totalTugas' => $totalTugas,
            'tugasPending' => $tugasPending,
            'tugasSelesai' => $tugasSelesai
        ]);
    }

    public function showPengelolaan()
    {
        return view('pengelolaan', ['list_tugas' => $this->dataTugas]);
    }

    public function showTugasDetail($id)
    {
        $tugasDitemukan = null;
        foreach ($this->dataTugas as $tugas) {
            if ($tugas['id'] == $id) {
                $tugasDitemukan = $tugas;
                break;
            }
        }
        if (!$tugasDitemukan) {
            return redirect('/pengelolaan');
        }
        return view('tugas-detail', ['tugas' => $tugasDitemukan]);
    }
    
    public function showProfile()
    {
        return view('profile');
    }
}