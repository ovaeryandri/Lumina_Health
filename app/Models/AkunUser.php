<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AkunUser extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'akun_user';

    protected $fillable = [
        'nama',
        'umur',
        'kelamin',
        'email',
        'password',
    ];

    public function form_workshops()
    {
        return $this->hasMany(form_workshops::class, 'id_akun_user');
    }
}

