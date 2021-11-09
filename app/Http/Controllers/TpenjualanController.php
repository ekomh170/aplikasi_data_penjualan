<?php

namespace App\Http\Controllers;

use App\Models\Wtransakasi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TpenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi_penjualan = Wtransakasi::latest();

        if (request('search')) {
            $transaksi_penjualan->where('nama_barang', 'like', '%' . request('search') . '%');
        }

        $wtransaksi = $transaksi_penjualan->get();
        return view('Transaksipenjualan.index', compact('wtransaksi'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wtransakasi  $Tpenjualan
     * @return \Illuminate\Http\Response
     */
    public function reset()
    {
        Wtransakasi::truncate();
        Alert::success('Berhasil', 'Menghapus Seluruh Data Log Transaksi Penjualan');
        return redirect('/transaksi-penjualan');
    }
}