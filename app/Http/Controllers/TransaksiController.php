<?php

namespace App\Http\Controllers;

use App\Models\DataHarga as DataHarga;
use App\Models\Transaksi as Trans;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;

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
            'transaksi.status',
            'transaksi.jumlah',
            'transaksi.alamat',
            'transaksi.created_at',
            'dataharga.nama as dataharga_nama',
            'dataharga.harga as harga',
            'users.name as user_name'
        )
        ->get();
        $users = User::get();
        $datahargas = DataHarga::get();
    return view('pages.pesanan', compact('transaksiDatas','users', 'datahargas'));
    }


    public function insertTransaction(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pembeli' => 'required',
            'users_id' => 'required',
            'id_dataharga' => 'required',
            'nohp' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
            'alamat' => 'required',
        ]);

        // Simpan data transaksi ke dalam tabel
        $transaction = new Trans();
        $transaction->nama_pembeli = $validatedData['nama_pembeli'];
        $transaction->id_dataharga = $validatedData['id_dataharga'];
        $transaction->total_harga = $validatedData['total_harga'];
        $transaction->users_id = $validatedData['users_id'];
        $transaction->nohp = $validatedData['nohp'];
        $transaction->alamat = $validatedData['alamat'];
        $transaction->status = 'Belum';
        $transaction->jumlah = $validatedData['jumlah'];

        $transaction->save();

        return redirect('/pesanan')->with('success', 'Transaksi berhasil disimpan');
    }

    public function updateTransaction(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_pembeli' => 'required',
            'users_id' => 'required',
            'id_dataharga' => 'required',
            'nohp' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
            'alamat' => 'required',
        ]);

        $transaction = Trans::find($id);

        if (!$transaction) {
            return redirect('/pesanan')->with('error', 'Transaksi tidak ditemukan');
        }

        $transaction->nama_pembeli = $validatedData['nama_pembeli'];
        $transaction->id_dataharga = $validatedData['id_dataharga'];
        $transaction->total_harga = $validatedData['total_harga'];
        $transaction->users_id = $validatedData['users_id'];
        $transaction->nohp = $validatedData['nohp'];
        $transaction->alamat = $validatedData['alamat'];
        $transaction->jumlah = $validatedData['jumlah'];

        $transaction->save();

        return redirect('/pesanan')->with('success', 'Transaksi berhasil diperbarui');
    }



    public function destroytrans($id)
    {
        $blog = Trans::where('id', $id)->delete();

        return redirect('/pesanan');
    }
    public function getHarga($id)
{
    $harga = Dataharga::find($id); // Gantilah 'Dataharga' sesuai dengan nama model Anda
    return response()->json(['harga' => $harga->harga]);
}
}

