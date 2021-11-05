<?php

namespace App\Http\Controllers;
use App\Models\Pembelian;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function tahu()
    {
        $pembelian = Pembelian::all();
        return view('pembelian', compact('pembelian'));
    }
}
