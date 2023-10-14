<?php

namespace App\Http\Controllers;

use App\Models\DataHarga as DataHarga;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jenis;

class BillingController extends Controller
{
    public function tabelbill()
    {
        $datahargas = DataHarga::get();
        $jeniss = Jenis::get();
        return view('pages.billing', compact('datahargas', 'jeniss'));
    }

    public function destroybill($id)
    {
        $blog = DataHarga::where('id', $id)->delete();

        return redirect('/billing');
    }

    public function insertBilling(Request $request)
    {
        $validatedData = $request->validate([
            'id_jenis' => 'required',
            'nama' => 'required',
            'durasi' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar' => 'nullable',
        ]);
        $files = $request->file('gambar');
        $fileName = time() . '.' . $files[0]->getClientOriginalName();
        $filePath = 'assets/img/dokumentation';
        $files[0]->move(public_path($filePath), $fileName); // Move the file to the specified directory

        // Save the file path in the database
        $photoPath = $filePath . '/' . $fileName; // Update the photo path

        // Create a new user record
        $bill = new DataHarga();
        $bill->id_jenis = $validatedData['id_jenis'];
        $bill->nama = $validatedData['nama'];
        $bill->durasi = $validatedData['durasi'];
        $bill->deskripsi = $validatedData['deskripsi'];
        $bill->harga = $validatedData['harga'];
        $bill->gambar = $fileName; // Save the file path in the database
        $bill->save();
        // Redirect or return a response as needed
        return redirect('/billing')->with('success', 'Admin user created successfully');
    }

    public function updateBilling(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_jenis' => 'required',
            'nama' => 'required',
            'durasi' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar' => 'nullable', // Sesuaikan aturan validasi gambar
        ]);

        // Cari data billing yang akan diperbarui berdasarkan ID
        $bill = DataHarga::find($id);

        if (!$bill) {
            // Handle the case where the data with the given ID is not found
            return redirect('/billing')->with('error', 'Data not found');
        }

        $files = $request->file('gambar');
        $fileName = time() . '.' . $files[0]->getClientOriginalName();
        $filePath = 'assets/img/dokumentation';
        $files[0]->move(public_path($filePath), $fileName); // Move the file to the specified directory

        // Save the file path in the database
        $photoPath = $filePath . '/' . $fileName; // Update the photo path

        $bill->id_jenis = $validatedData['id_jenis'];
        $bill->nama = $validatedData['nama'];
        $bill->durasi = $validatedData['durasi'];
        $bill->deskripsi = $validatedData['deskripsi'];
        $bill->harga = $validatedData['harga'];
        $bill->gambar = $fileName;

        $bill->save();

        return redirect('/billing')->with('success', 'Data updated successfully');
    }
}
