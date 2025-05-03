<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class form_workshops extends Model
{
    protected $table = 'form_workshop'; // nama tabel sesuai migration

    protected $fillable = [
        'id_akun_user',
        'id_home_workshops',
        'nama',
        'alamat',
        'no_hp',
        'tujuan',
    ];

    public function user()
    {
        return $this->belongsTo(akun_user::class, 'id_akun_user');
    }

    public function workshop()
    {
        return $this->belongsTo(home_workshop::class, 'id_home_workshops');
    }
}
