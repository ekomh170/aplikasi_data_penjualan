<?php

namespace App\Http\Controllers;

use App\Models\Tpenjualan;
use App\Models\Wtransakasi;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class TpenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wtransaksi = Wtransakasi::all();
        return view('Transaksipenjualan.index', compact('wtransaksi'));
    }
}