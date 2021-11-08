<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mpenjualan extends Model
{
    use HasFactory;

    protected $table = 'master_penjualan';
    protected $fillable = ["nama_barang", "jenis_penjualan_id"];
    public $timestamps = false;
}