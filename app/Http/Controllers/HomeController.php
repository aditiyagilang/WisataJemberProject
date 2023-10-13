<?php

namespace App\Http\Controllers;

use App\Models\Documentation as Doc;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function tabeldoc()
    {
        $dokumentasis = Doc::where('jenis', 'dokumentasi')->get();
        $sejarahs = Doc::where('jenis', 'sejarah')->get();
        return view('pages.tables', compact('dokumentasis', 'sejarahs'));
    }

    public function destroydoc($id)
    {
        $blog = Doc::where('id', $id)->delete();

        return redirect('/tables');
    }

    public function insertDokumen(Request $request)
    {
        // Validate the input data, including the file
        $validatedData = $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required',
            'foto' => 'nullable',
            // Adjust the file size as needed
        ]);
            $files = $request->file('foto');
            $fileName = time() . '.' . $files[0]->getClientOriginalName();
            $filePath = 'assets/img/dokumentation';
            $files[0]->move(public_path($filePath), $fileName); // Move the file to the specified directory

            // Save the file path in the database
            $photoPath = $filePath . '/' . $fileName; // Update the photo path

        // Create a new user record
        $doc = new Doc();
        $doc->judul = $validatedData['judul'];
        $doc->deskripsi = $validatedData['deskripsi'];
        $doc->jenis = 'dokumentasi';
        $doc->foto = $fileName; // Save the file path in the database

        $doc->save();
        // Redirect or return a response as needed
        return redirect('/tables')->with('success', 'Admin user created successfully');
    }
    public function insertSejarah(Request $request)
    {
        // Validate the input data, including the file
        $validatedData = $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required',
            'foto' => 'nullable',
            // Adjust the file size as needed
        ]);
            $files = $request->file('foto');
            $fileName = time() . '.' . $files[0]->getClientOriginalName();
            $filePath = 'assets/img/dokumentation';
            $files[0]->move(public_path($filePath), $fileName); // Move the file to the specified directory

            // Save the file path in the database
            $photoPath = $filePath . '/' . $fileName; // Update the photo path

        // Create a new user record
        $doc = new Doc();
        $doc->judul = $validatedData['judul'];
        $doc->deskripsi = $validatedData['deskripsi'];
        $doc->jenis = 'sejarah';
        $doc->foto = $fileName; // Save the file path in the database

        $doc->save();
        // Redirect or return a response as needed
        return redirect('/tables')->with('success', 'Admin user created successfully');
    }

    public function updateSejarah(Request $request, $id)
{
    // Validate the input data, including the file
    $validatedData = $request->validate([
        'judul' => 'required|string',
        'deskripsi' => 'required',
        'foto' => 'nullable',
        // Adjust the file size as needed
    ]);

    // Find the data to be updated
    $doc = Doc::find($id);

    if (!$doc) {
        // Handle the case where the data with the given ID is not found
        return redirect('/tables')->with('error', 'Data not found');
    }

    if ($request->hasFile('foto')) {
        $files = $request->file('foto');
        $fileName = time() . '.' . $files[0]->getClientOriginalName();
        $filePath = 'assets/img/dokumentation';
        $files[0]->move(public_path($filePath), $fileName); // Move the file to the specified directory
        $photoPath = $filePath . '/' . $fileName; // Update the photo path
        $doc->foto = $fileName; // Update the photo path in the database
    }

    $doc->judul = $validatedData['judul'];
    $doc->deskripsi = $validatedData['deskripsi'];

    $doc->save();

    // Redirect or return a response as needed
    return redirect('/tables')->with('success', 'Data updated successfully');
}

}


