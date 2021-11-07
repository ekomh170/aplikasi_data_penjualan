<?php

namespace App\Http\Controllers;

use App\Models\Jpenjualan;
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
        $jpenjualan = Jpenjualan::all();
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
            'jenis_barang' => 'required',
        ]);

        Jpenjualan::create([
            "jenis_barang" => $request["jenis_barang"],
        ]);

        return redirect('/jenis-barang');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jpenjualan  $Jpenjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jpenjualan $id)
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
    public function update(Request $request, Jpenjualan $id)
    {
        $request->validate([
            "jenis_barang" => $request["jenis_barang"],
        ]);

        $jpenjualan = Jpenjualan::find($id);

        $data_barang = [
            "jenis_barang" => $request["jenis_barang"],
        ];

        $jpenjualan->update($data_barang);
        return redirect('/jenis-barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jpenjualan  $Jpenjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jpenjualan $id)
    {
        $jpenjualan = Jpenjualan::find($id);
        $jpenjualan->delete();
        return redirect('/jenis-barang');
    }
}