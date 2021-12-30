<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;
    protected $table = "informasi"; //cek
    protected $primaryKey = "id"; //cek

    protected $fillable = [
        'id', 'id_penulis','id_kategori','judul','gambar','isi','tgl_up'
    ];
}
