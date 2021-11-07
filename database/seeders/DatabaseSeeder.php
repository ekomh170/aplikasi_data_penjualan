<?php

namespace Database\Seeders;

use App\Models\Mbarang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //Barang
        Mbarang::create([
            'nama_barang' => 'Kopi',
            'stok' => '100',
            'jumlah_terjual' => '10',
            'jenis_barang' => 'Konsumsi',
        ]);

        Mbarang::create([
            'nama_barang' => 'Teh',
            'stok' => '100',
            'jumlah_terjual' => '19',
            'jenis_barang' => 'Konsumsi',
        ]);

        Mbarang::create([
            'nama_barang' => 'Kopi',
            'stok' => '90',
            'jumlah_terjual' => '15',
            'jenis_barang' => 'Konsumsi',
        ]);

        Mbarang::create([
            'nama_barang' => 'Pasta Gigi',
            'stok' => '100',
            'jumlah_terjual' => '20',
            'jenis_barang' => 'Pembersih',
        ]);

        Mbarang::create([
            'nama_barang' => 'Sabun Mandi',
            'stok' => '100',
            'jumlah_terjual' => '30',
            'jenis_barang' => 'Pembersih',
        ]);

        Mbarang::create([
            'nama_barang' => 'Sampo',
            'stok' => '100',
            'jumlah_terjual' => '25',
            'jenis_barang' => 'Pembersih',
        ]);

        Mbarang::create([
            'nama_barang' => 'Teh',
            'stok' => '81',
            'jumlah_terjual' => '5',
            'jenis_barang' => 'Konsumsi',
        ]);
        //Barang
    }
}