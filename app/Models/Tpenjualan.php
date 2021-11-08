<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tpenjualan extends Model
{
    use HasFactory;

    protected $table = 'transaksi_penjualan';
    protected $fillable = ["stok", "jumlah_terjual", "master_barang_id"];
    public $timestamps = false;


    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y H:i:s');
    }

    public function getUpdatedAtAttribute()
    {
        return Carbon::parse($this->attributes['updated_at'])->translatedFormat('l, d F Y H:i:s');
    }
}