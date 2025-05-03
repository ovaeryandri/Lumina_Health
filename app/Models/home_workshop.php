<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_workshop extends Model
{
    use HasFactory;
    protected $table = 'home_workshops';

    protected $fillable = [
        'judul',
        'id_akun_user',
        'deskripsi',
        'lokasi',
        'waktu_mulai',
        'waktu_selesai',
        'maks_kapasitas',
        'gambar',
    ];

    public function pendaftar()
    {
        return $this->hasMany(form_workshops::class, 'id_home_workshops');
    }

    public function isFull()
    {
        return $this->pendaftar()->count() >= $this->maks_kapasitas;
    }

}
