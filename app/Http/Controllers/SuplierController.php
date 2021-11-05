<?php

namespace App\Http\Controllers;
use App\Models\Suplier;

use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function tahu()
    {
        $suplier = Suplier::all();
        return view('suplier', compact('suplier'));
    }
}
