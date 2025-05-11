<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeProgram extends Model
{
    use HasFactory;
    protected $table = 'home_programs';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'tgl_mulai',
        'tgl_selesai',
    ];

    public function users()
    {
        return $this->belongsToMany(AkunUser::class, 'program_user', 'home_program_id', 'akun_user_id');
    }

}
