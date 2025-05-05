<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesanKonsultasi extends Model
{
    protected $fillable = ['konsultasi_id', 'pengirim_type', 'pengirim_id', 'pesan'];

    public function konsultasi()
    {
        return $this->belongsTo(konsultasi::class);
    }

    public function pengirim()
    {
        return $this->morphTo(null, 'pengirim_type', 'pengirim_id');
    }
}
