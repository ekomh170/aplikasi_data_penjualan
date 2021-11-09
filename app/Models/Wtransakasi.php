<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wtransakasi extends Model
{
    use HasFactory;

    protected $table = 'waktu_transaksi';
    protected $fillable = ["created_at", "stok", "jumlah_terjual", "nama_barang_id"];

    public function barang_penjualan()
    {
        return $this->belongsTo('App\Models\Bpenjualan', 'nama_barang_id');
    }

    public function transaksi_penjualan()
    {
        return $this->belongsTo('App\Models\Tpenjualan', 'transaksi_penjualan_id');
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y H:i:s');
    }

    public function getUpdatedAtAttribute()
    {
        return Carbon::parse($this->attributes['updated_at'])->translatedFormat('l, d F Y H:i:s');
    }
}