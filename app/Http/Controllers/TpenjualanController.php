<?php

namespace App\Http\Controllers;

use App\Models\Bpenjualan;
use App\Models\Tpenjualan;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang_penjualan = Bpenjualan::all();
        return view('Masterpenjualan.create', compact('barang_penjualan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'stok' => 'required',
            'jumlah_terjual' => 'required',
            'nama_barang_id' => 'required',
        ]);

        Tpenjualan::create([
            "stok" => $request["stok"],
            "jumlah_terjual" => $request["jumlah_terjual"],
            "nama_barang_id" => $request["nama_barang_id"],
        ]);

        Alert::success('Berhasil', 'Tambah Master Data Penjualan');
        return redirect('/transaksi-penjualan');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tpenjualan  $Tpenjualan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tpenjualan = Tpenjualan::find($id);
        $jenis_barang = Bpenjualan::all();
        return view('Masterpenjualan.edit', compact('tpenjualan', 'jenis_barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tpenjualan  $Tpenjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'stok' => 'required',
            'jumlah_terjual' => 'required',
            'nama_barang_id' => 'required',
        ]);

        $tpenjualan = Tpenjualan::find($id);

        $data_barang = [
            "stok" => $request["stok"],
            "jumlah_terjual" => $request["jumlah_terjual"],
            "nama_barang_id" => $request["nama_barang_id"],
        ];

        $tpenjualan->update($data_barang);
        Alert::success('Berhasil', 'Edit Master Data Penjualan');
        return redirect('/transaksi-penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tpenjualan  $Tpenjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tpenjualan = Tpenjualan::find($id);
        $tpenjualan->delete();
        Alert::success('Berhasil', 'Hapus Master Data Penjualan');
        return redirect('/transaksi-penjualan');
    }
}