<?php

namespace Database\Seeders;

use App\Models\Jbarang;
use App\Models\Mbarang;
use App\Models\Tbarang;
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
            'jenis_barang_id' => '1',
        ]);

        Mbarang::create([
            'nama_barang' => 'Pasta Gigi',
            'jenis_barang_id' => '2',
        ]);

        Mbarang::create([
            'nama_barang' => 'Sabun Mandi',
            'jenis_barang_id' => '2',
        ]);

        Mbarang::create([
            'nama_barang' => 'Sampo',
            'jenis_barang_id' => '2',
        ]);

        Mbarang::create([
            'nama_barang' => 'Teh',
            'jenis_barang_id' => '1',
        ]);
        //Barang

        //Jenis_Barang
        Jbarang::create([
            'jenis_barang' => 'Konsumsi',
        ]);

        Jbarang::create([
            'jenis_barang' => 'Pembersih',
        ]);
        //Jenis_Barang

        //Transaksi
        Tbarang::create([
            'stok' => '100',
            'jumlah_terjual' => '10',
            'nama_barang_id' => '1',
        ]);

        Tbarang::create([
            'stok' => '100',
            'jumlah_terjual' => '19',
            'nama_barang_id' => '2',
        ]);

        Tbarang::create([
            'stok' => '90',
            'jumlah_terjual' => '15',
            'nama_barang_id' => '1',
        ]);

        Tbarang::create([
            'stok' => '100',
            'jumlah_terjual' => '20',
            'nama_barang_id' => '3',
        ]);

        Tbarang::create([
            'stok' => '100',
            'jumlah_terjual' => '30',
            'nama_barang_id' => '4',
        ]);

        Tbarang::create([
            'stok' => '100',
            'jumlah_terjual' => '25',
            'nama_barang_id' => '5',
        ]);

        Tbarang::create([
            'stok' => '81',
            'jumlah_terjual' => '5',
            'nama_barang_id' => '2',
        ]);
        //Transaksi
    }
}