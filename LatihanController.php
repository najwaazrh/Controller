<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    // Function untuk menampilkan tabel
    public function getTable()
    {
        $mahasiswa = [
            ['nim' => '17220879', 'nama' => 'Najwa Az Zahroh', 'kelas' => '17.6B.05'],
            ['nim' => 'NIM 2', 'nama' => 'Nama Lengkap 2', 'kelas' => 'Kelas 2'],
        ];

        return view('latihan.tabel', compact('mahasiswa'));
    }

    // Function untuk menampilkan form
    public function getForm()
    {
        return view('latihan.form');
    }
}
