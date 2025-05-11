<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class about_staff extends Authenticatable
{
    use HasFactory;
    protected $table = 'about_staffs';

    protected $fillable = [
        'nama',
        'spesialisasi',
        'bio',
        'tahun_pengalaman',
        'email',
        'no_hp',
        'foto_profil',
    ];

}
