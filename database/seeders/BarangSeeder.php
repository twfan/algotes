<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            'kode_barang' => Str::random(5),
            'nama_barang' => "iphone",
            'harga_jual' => 10000,
            'harga_beli' => 5000,
            'stok' => 100,
            'kategori' => "aksesoris",
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => Str::random(5),
            'nama_barang' => "samsung",
            'harga_jual' => 10000,
            'harga_beli' => 5000,
            'stok' => 100,
            'kategori' => "aksesoris",
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => Str::random(5),
            'nama_barang' => "xiaomi",
            'harga_jual' => 10000,
            'harga_beli' => 5000,
            'stok' => 100,
            'kategori' => "aksesoris",
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => Str::random(5),
            'nama_barang' => "vivo",
            'harga_jual' => 10000,
            'harga_beli' => 5000,
            'stok' => 100,
            'kategori' => "aksesoris",
        ]);

        DB::table('barangs')->insert([
            'kode_barang' => Str::random(5),
            'nama_barang' => "mac",
            'harga_jual' => 10000,
            'harga_beli' => 5000,
            'stok' => 100,
            'kategori' => "laptop",
        ]);
        DB::table('barangs')->insert([
            'kode_barang' => Str::random(5),
            'nama_barang' => "rog",
            'harga_jual' => 10000,
            'harga_beli' => 5000,
            'stok' => 100,
            'kategori' => "laptop",
        ]);

        DB::table('barangs')->insert([
            'kode_barang' => Str::random(5),
            'nama_barang' => "corsair",
            'harga_jual' => 10000,
            'harga_beli' => 5000,
            'stok' => 100,
            'kategori' => "ram",
        ]);

        
    }
}
