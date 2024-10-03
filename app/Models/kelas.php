<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = ['id']; // Perbaikan: guarded bukan guarder
    protected $table = 'kelas';
    
    public function user()
    {
        return $this->hasMany(UserModel::class, 'kelas_id');
    }

// Remove the create() method from here

// public function create(){
//     return view('create_user', ['kelas' => Kelas::all(),
//     ]);
//     }

    public function getKelas()
        {
            return $this->all();
        }
}
