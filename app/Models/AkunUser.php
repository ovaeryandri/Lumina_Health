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


    public function programs()
    {
        return $this->belongsToMany(HomeProgram::class, 'program_user', 'akun_user_id', 'home_program_id');
    }

    public function workshops()
    {
        return $this->belongsToMany(home_workshop::class, 'workshop_user', 'akun_user_id', 'home_workshop_id');
    }

}

