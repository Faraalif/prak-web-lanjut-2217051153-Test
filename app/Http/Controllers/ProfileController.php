<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama, $npm, $kelas_id)
    {
        $data = [
            'nama'  => $nama,
            'npm'   => $npm,
            'nama_kelas' => $kelas_id,
        ];

        return view('profile')->with($data);
    }
}