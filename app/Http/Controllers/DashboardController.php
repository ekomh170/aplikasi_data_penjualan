<?php

namespace App\Http\Controllers;

use App\Models\Tpenjualan;
use App\Models\Bpenjualan;
use App\Models\Jpenjualan;
use App\Models\Wtransakasi;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $wtransaksi = Wtransakasi::offset(1)->limit(5)->latest()->get();
        $jpenjualancount = Jpenjualan::count();
        $bpenjualancount = Bpenjualan::count();
        $mpenjualancount = Tpenjualan::count();
        $wtransaksicount = Wtransakasi::count();
        return view('Dashboard.index', compact('wtransaksi', 'jpenjualancount', 'bpenjualancount', 'mpenjualancount', 'wtransaksicount'));
    }
}