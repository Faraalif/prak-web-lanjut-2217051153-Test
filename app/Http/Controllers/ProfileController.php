<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "Fara Alif Lailla", $kelas = "D", $npm = "2217051153")
    {
        $data = [
            'nama'  => $nama,
            'kelas' => $kelas,
            'npm'   => $npm,
        ];

        return view('profile')->with($data);
    }
}