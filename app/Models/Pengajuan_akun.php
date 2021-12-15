<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan_akun extends Model
{
    use HasFactory;
    protected $table = "pengajuan_akun"; //cek
    protected $primaryKey = "id"; //cek

    protected $fillable = [
        'id', 'email', 'password', 'nama', 'nim', 'thn_lulus'
    ];

}
