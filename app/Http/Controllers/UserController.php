<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Membuat UserModel dan KelasModel sebagai properti public
    public $userModel;
    public $kelasModel;

    // Menggunakan constructor untuk inisialisasi
    public function __construct()
    {
        $this->userModel = new User();
        $this->kelasModel = new Kelas();
    }

    public function create()
    {
        // Menggunakan operator $this untuk mengakses model Kelas
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        // Menggunakan operator $this untuk mengakses model User
        $user = $this->userModel->create($validatedData);
        $user->load('kelas');

        return view('profile', [
            'nama' => $user->nama,
            'npm' => $user->npm,
            'kelas_id' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan',
        ]);
    }
}
