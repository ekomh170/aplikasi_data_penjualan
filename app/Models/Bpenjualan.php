<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bpenjualan extends Model
{
    use HasFactory;

    protected $table = 'barang_penjualan';
    protected $fillable = ["nama_barang", "jenis_penjualan_id"];
    public $timestamps = false;

    public function jenis_penjualan()
    {
        return $this->belongsTo('App\Models\Jpenjualan');
    }

    public function transaksi_penjualan()
    {
        return $this->hasMany('App\Models\Tpenjualan');
    }
}