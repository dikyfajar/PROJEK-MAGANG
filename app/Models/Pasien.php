<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    public $table = 'pasien';

    use HasFactory;

    protected $fillable =  [
        'no_rekam',
        'nama_pasien',
        'nik',
        'kk',
        'jenis_kelamin',
        'tgl_lahir',
        'telp_pasien',
        'email',
        'alamat_pasien',
        'id_desa_pasien',
        'nama_pj',
        'status_pj',
        'telp_pj',
        'alamat_pj',
        'id_desa_pj',
        'status'
    ];
}
