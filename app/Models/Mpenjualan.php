<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mpenjualan extends Model
{
    use HasFactory;

    protected $table = 'master_barang';
    protected $fillable = ["nama_barang", "jenis_barang_id"];
    public $timestamps = false;
}