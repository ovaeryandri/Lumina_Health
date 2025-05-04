<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
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
}
