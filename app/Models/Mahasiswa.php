<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table='data_mahasiswa';
    protected $fillable = [
        'nim',
        'nama',
        'angkatan',
        'prodi',
        'fakultas',
    ];
}