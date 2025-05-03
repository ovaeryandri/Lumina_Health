<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class akun_user extends Model
{
    use HasFactory;
    protected $table = 'akun_user';

    protected $fillable = [
        'nama',
        'umur',
        'kelamin',
        'email',
        'password',
    ];

    public function user()
    {
        return $this->hasMany(form_workshops::class, 'id_akun_user');
    }
}
