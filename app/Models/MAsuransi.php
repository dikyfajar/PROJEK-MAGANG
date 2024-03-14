<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MAsuransi extends Model
{
    // get table
    public $table = 'master_asuransi';

    use HasFactory;

    protected $fillable = [
        'id',
        'nama_asuransi'
    ];
}
