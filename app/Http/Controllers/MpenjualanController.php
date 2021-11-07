<?php

namespace App\Http\Controllers;

use App\Models\Mpenjualan;
use App\Models\Jpenjualan;
use Illuminate\Http\Request;

class MpenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mpenjualan = Mpenjualan::all();
        return view('Masterpenjualan.index', compact('mpenjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_barang = Jpenjualan::all();
        return view('Masterpenjualan.create', compact('jenis_barang'));
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
            'nama_barang' => 'required',
            'jenis_barang_id' => 'required',
        ]);

        Mpenjualan::create([
            "nama_barang" => $request["nama_barang"],
            "jenis_barang_id" => $request["jenis_barang_id"],
        ]);

        return redirect('/master-barang');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mpenjualan  $Mpenjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Mpenjualan $id)
    {
        $mpenjualan = Mpenjualan::find($id);
        $jenis_barang = Jpenjualan::all();
        return view('Masterpenjualan.edit', compact('mpenjualan', 'jenis_barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mpenjualan  $Mpenjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mpenjualan $id)
    {
        $request->validate([
            "nama_barang" => $request["nama_barang"],
            "jenis_barang_id" => $request["jenis_barang_id"],
        ]);

        $mpenjualan = Mpenjualan::find($id);

        $data_barang = [
            "nama_barang" => $request["nama_barang"],
            "jenis_barang_id" => $request["jenis_barang_id"],
        ];

        $mpenjualan->update($data_barang);
        return redirect('/master-barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mpenjualan  $Mpenjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mpenjualan $id)
    {
        $mpenjualan = Mpenjualan::find($id);
        $mpenjualan->delete();
        return redirect('/master-barang');
    }
}