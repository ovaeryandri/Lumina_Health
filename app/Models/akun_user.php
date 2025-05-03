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

    public function home_workshop(){
        return $this->hasMany(home_workshop::class, 'id_akun_user');
    }
}
