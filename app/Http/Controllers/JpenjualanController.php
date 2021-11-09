<?php

namespace App\Http\Controllers;

use App\Models\Jpenjualan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class JpenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis_penjualan = Jpenjualan::latest();

        if (request('search')) {
            $jenis_penjualan->where('jenis_penjualan', 'like', '%' . request('search') . '%');
        }

        $jpenjualan = $jenis_penjualan->get();
        return view('Jenispenjualan.index', compact('jpenjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Jenispenjualan.create');
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
            'jenis_penjualan' => 'required',
        ]);

        Jpenjualan::create([
            "jenis_penjualan" => $request["jenis_penjualan"],
        ]);

        Alert::success('Berhasil', 'Tambah Data Jenis Penjualan');
        return redirect('/jenis-penjualan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jpenjualan  $Jpenjualan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jpenjualan = Jpenjualan::find($id);
        return view('Jenispenjualan.edit', compact('jpenjualan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jpenjualan  $Jpenjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_penjualan' => 'required',
        ]);

        $jpenjualan = Jpenjualan::find($id);

        $data_barang = [
            "jenis_penjualan" => $request["jenis_penjualan"],
        ];

        $jpenjualan->update($data_barang);
        Alert::success('Berhasil', 'Edit Data Jenis Penjualan');
        return redirect('/jenis-penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jpenjualan  $Jpenjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jpenjualan = Jpenjualan::find($id);
        $jpenjualan->delete();
        Alert::success('Berhasil', 'Hapus Data Jenis Penjualan');
        return redirect('/jenis-penjualan');
    }
}