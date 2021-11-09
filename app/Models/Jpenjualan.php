<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jpenjualan extends Model
{
    use HasFactory;

    protected $table = 'jenis_penjualan';
    protected $fillable = ["jenis_penjualan", "created_at", "updated_at"];

    public function scopeFilter($query)
    {
        if (request('search')) {
            return $query->where('jenis_penjualan', 'like', '%' . request('search') . '%')
                ->orWhere('created_at', 'like', '%' . request('search') . '%')
                ->orWhere('updated_at', 'like', '%' . request('search') . '%');
        }
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y H:i:s');
    }

    public function getUpdatedAtAttribute()
    {
        return Carbon::parse($this->attributes['updated_at'])->translatedFormat('l, d F Y H:i:s');
    }

    public function barang_penjualan()
    {
        return $this->hasMany('App\Models\Bpenjualan');
    }
}