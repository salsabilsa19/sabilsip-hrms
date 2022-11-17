<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'tb_pegawai';

    protected $fillable = [
        'nip',
        'nama',
        'jabatan',
        'tahun_masuk',
        'status'
    ];
}
