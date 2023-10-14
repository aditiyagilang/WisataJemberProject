<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = 'jenis'; // Nama tabel yang sesuai dengan schema

    protected $fillable = ['nama', 'jumlah']; // Kolom yang bisa diisi

    public $timestamps = true; // Aktifkan timestamp (created_at dan updated_at)

    // Definisi lainnya seperti relasi dengan model lain jika diperlukan
}
