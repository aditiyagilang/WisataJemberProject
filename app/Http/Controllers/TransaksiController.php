<?php

namespace App\Http\Controllers;

use App\Models\DataHarga as DataHarga;
use App\Models\Transaksi as Trans;
use Illuminate\Http\Request;
use App\Models\User;

class TransaksiController extends Controller
{
    public function tabeltrans()
    {
       
        $transaksiDatas = Trans::join('dataharga', 'transaksi.id_dataharga', '=', 'dataharga.id')
        ->join('users', 'transaksi.users_id', '=', 'users.id')
        ->select(
            'transaksi.id',
            'transaksi.nama_pembeli',
            'dataharga.nama as nama_paket',
            'transaksi.total_harga',
            'transaksi.nohp',
            'transaksi.total',
            'transaksi.status',
            'transaksi.jumlah',
            'transaksi.alamat',
            'transaksi.created_at',
            'dataharga.nama as dataharga_nama',
            'users.name as user_name'
        )
        ->get();

    return view('pages.pesanan', compact('transaksiDatas'));
    }

    public function destroytrans($id)
    {
        $blog = Trans::where('id', $id)->delete();

        return redirect('/pesanan');
    }
}

