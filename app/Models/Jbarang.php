<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jbarang extends Model
{
    use HasFactory;

    protected $table = 'jenis_barang';
    protected $fillable = ["jenis_barang", "created_at", "updated_at"];
}