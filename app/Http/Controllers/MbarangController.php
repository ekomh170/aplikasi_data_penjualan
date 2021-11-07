<?php

namespace App\Http\Controllers;

use App\Models\Mbarang;
use Illuminate\Http\Request;

class MbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Mbarang::all();
        return view('Mbarang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mbarang.create');
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
            'stok' => 'required',
            'jumlah_terjual' => 'required',
            'jenis_barang' => 'required',
        ]);

        Mbarang::create([
            "nama_barang" => $request["nama_barang"],
            "stok" => $request["stok"],
            "jumlah_terjual" => $request["jumlah_terjual"],
            "jenis_barang" => $request["jenis_barang"],
        ]);

        return redirect('/master-barang');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mbarang  $mbarang
     * @return \Illuminate\Http\Response
     */
    public function edit(Mbarang $id)
    {
        $barang = Mbarang::find($id);
        return view('Mbarang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mbarang  $mbarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mbarang $id)
    {
        $request->validate([
            "nama_barang" => $request["nama_barang"],
            "stok" => $request["stok"],
            "jumlah_terjual" => $request["jumlah_terjual"],
            "jenis_barang" => $request["jenis_barang"],
        ]);

        $barang = Mbarang::find($id);

        $data_barang = [
            "nama_barang" => $request["nama_barang"],
            "stok" => $request["stok"],
            "jumlah_terjual" => $request["jumlah_terjual"],
            "jenis_barang" => $request["jenis_barang"],
        ];

        $barang->update($data_barang);
        return redirect('/master-barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mbarang  $mbarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mbarang $id)
    {
        $barang = Mbarang::find($id);
        $barang->delete();
        return redirect('/master-barang');
    }
}