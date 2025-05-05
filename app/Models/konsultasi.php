<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class konsultasi extends Model
{
    protected $fillable = ['akun_user_id', 'about_staffs_id', 'status'];

    public function user()
    {
        return $this->belongsTo(AkunUser::class, 'akun_user_id');
    }

    public function staff()
    {
        return $this->belongsTo(about_staff::class, 'about_staffs_id');
    }

    public function pesan()
    {
        return $this->hasMany(PesanKonsultasi::class, 'konsultasi_id');
    }
}
