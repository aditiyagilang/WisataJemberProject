<?php

namespace App\Http\Controllers;

use App\Models\DataHarga as DataHarga;
use Illuminate\Http\Request;
use App\Models\User;

class BillingController extends Controller
{
    public function tabelbill()
    {
        $datahargas = DataHarga::get();
        return view('pages.billing', compact('datahargas'));
    }

    public function destroybill($id)
    {
        $blog = DataHarga::where('id', $id)->delete();

        return redirect('/billing');
    }
}

