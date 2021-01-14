<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'Anggota';

    protected $fillable = [
        'nama',
        'no_anggota',
        'alamat',
        'nohp',
        'jenis_kelamin',
        'akun_FB',
    ];
}
