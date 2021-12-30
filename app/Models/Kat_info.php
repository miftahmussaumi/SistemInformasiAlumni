<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kat_info extends Model
{
    use HasFactory;
    protected $table = "kat_info"; //cek
    protected $primaryKey = "id"; //cek

    protected $fillable = [
        'id', 'nama_kategori'
    ];
}
