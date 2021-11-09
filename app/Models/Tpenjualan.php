<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tpenjualan extends Model
{
    use HasFactory;

    protected $table = 'transaksi_penjualan';
    protected $fillable = ["stok", "jumlah_terjual", "nama_barang_id"];

    public function barang_penjualan()
    {
        return $this->belongsTo('App\Models\Bpenjualan', 'nama_barang_id');
    }
}