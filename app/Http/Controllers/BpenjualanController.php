<?php

namespace App\Http\Controllers;

use App\Models\Jpenjualan;
use App\Models\Mpenjualan;
use Illuminate\Http\Request;

class BpenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bpenjualan = Mpenjualan::all();
        return view('Barangpenjualan.index', compact('bpenjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_p = Jpenjualan::all();
        return view('Barangpenjualan.create', compact('jenis_p'));
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
            'nama_barang' => 'required|unique:master_penjualan,nama_barang',
            'jenis_penjualan_id' => 'required',
        ]);

        Mpenjualan::create([
            "nama_barang" => $request["nama_barang"],
            "jenis_penjualan_id" => $request["jenis_penjualan_id"],
        ]);

        return redirect('/barang-penjualan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mpenjualan  $bpenjualan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bpenjualan = Mpenjualan::find($id);
        $jenis_p = Jpenjualan::all();
        return view('Barangpenjualan.edit', compact('bpenjualan', 'jenis_p'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mpenjualan  $bpenjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required|unique:master_penjualan,nama_barang',
            'jenis_penjualan_id' => 'required',
        ]);

        $mpenjualan = Mpenjualan::find($id);

        $data_barang = [
            "nama_barang" => $request["nama_barang"],
            "jenis_penjualan_id" => $request["jenis_penjualan_id"],
        ];

        $mpenjualan->update($data_barang);
        return redirect('/barang-penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mpenjualan  $bpenjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mpenjualan = Mpenjualan::find($id);
        $mpenjualan->delete();
        return redirect('/barang-penjualan');
    }
}