<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    protected $fillable = [
        'nama_pembeli',
        'nama_paket', 
        'alamat', 
        'total_harga', 
        'users_id', 
        'id_dataharga', 
        'nohp', 
        'total', 
        'status', 
        'jumlah'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function dataharga()
    {
        return $this->belongsTo(DataHarga::class, 'id_dataharga');
    }

    // Add any additional model-specific code or relationships here
}
