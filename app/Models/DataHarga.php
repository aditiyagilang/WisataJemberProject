<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataHarga extends Model
{
    protected $table = 'dataharga';

    protected $fillable = ['id_jenis', 'nama', 'durasi', 'deskripsi', 'gambar'];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'id_jenis');
    }

    // Add any additional model-specific code or relationships here
}
