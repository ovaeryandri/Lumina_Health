<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table = 'user1';

    protected $fillable = [
        'email',
        'password',
        'umur',
        'no_hp',
        'kelamin',
        'alamat',
    ];
}
