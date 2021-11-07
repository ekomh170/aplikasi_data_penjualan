<?php

namespace App\Http\Controllers;

use App\Models\Tpenjualan;
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
        $tpenjualan = Tpenjualan::all();
        return view('Transaksipenjualan.index', compact('tpenjualan'));
    }
}