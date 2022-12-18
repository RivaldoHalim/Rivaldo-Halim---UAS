<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TamuHotel;
use PDF;


class TamuVippdf extends Controller
{
    //
    public function index()
    {
        $th = TamuHotel::all();
        return view('laporan.hotel', ['tamuhotel' => $th]);
    }

    public function print()
    {
        $th = TamuHotel::all();
        
        return view('laporan.hotelpdf', ['tamuhotel' => $th]);
    }
}
