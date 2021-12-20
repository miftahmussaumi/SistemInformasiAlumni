<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Alumni extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = "alumni"; //cek
    protected $primaryKey = "id"; //cek

    protected $fillable = [
        'id', 'email', 'password', 'nama', 'nim', 'thn_lulus','jk','tempat_lahir',
        'tgl_lahir','nim','thn_lulus','about','organisasi','prestasi','no_hp','instagram',
        'linkedin','foto','alamat','ipk','tpt_kerja','pekerjaan','jurusan'
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
