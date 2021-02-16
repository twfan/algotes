<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('penjualans')->insert([
            'nama_konsumen' => Str::random(5),
            'alamat' => Str::random(15),
            'created_at' => Carbon::now()->format('Y-m-d'),
            'updated_at' => Carbon::now()->format('Y-m-d')

        ]);
        DB::table('penjualans')->insert([
            'nama_konsumen' => Str::random(5),
            'alamat' => Str::random(15),
            'created_at' => Carbon::now()->format('Y-m-d'),
    'updated_at' => Carbon::now()->format('Y-m-d')
        ]);
        DB::table('penjualans')->insert([
            'nama_konsumen' => Str::random(5),
            'alamat' => Str::random(15),
            'created_at' => Carbon::now()->format('Y-m-d'),
    'updated_at' => Carbon::now()->format('Y-m-d')
        ]);
        DB::table('penjualans')->insert([
            'nama_konsumen' => Str::random(5),
            'alamat' => Str::random(15),
            'created_at' => Carbon::now()->format('Y-m-d'),
    'updated_at' => Carbon::now()->format('Y-m-d')
        ]);
        DB::table('penjualans')->insert([
            'nama_konsumen' => Str::random(5),
            'alamat' => Str::random(15),
            'created_at' => Carbon::now()->format('Y-m-d'),
    'updated_at' => Carbon::now()->format('Y-m-d')
        ]);
        DB::table('penjualans')->insert([
            'nama_konsumen' => Str::random(5),
            'alamat' => Str::random(15),
            'created_at' => Carbon::now()->format('Y-m-d'),
    'updated_at' => Carbon::now()->format('Y-m-d')
        ]);
        DB::table('penjualans')->insert([
            'nama_konsumen' => Str::random(5),
            'alamat' => Str::random(15),
            'created_at' => Carbon::now()->format('Y-m-d'),
    'updated_at' => Carbon::now()->format('Y-m-d')
        ]);
        DB::table('penjualans')->insert([
            'nama_konsumen' => Str::random(5),
            'alamat' => Str::random(15),
            'created_at' => Carbon::now()->format('Y-m-d'),
    'updated_at' => Carbon::now()->format('Y-m-d')
        ]);
        DB::table('penjualans')->insert([
            'nama_konsumen' => Str::random(5),
            'alamat' => Str::random(15),
            'created_at' => Carbon::now()->format('Y-m-d'),
    'updated_at' => Carbon::now()->format('Y-m-d')
        ]);
        DB::table('penjualans')->insert([
            'nama_konsumen' => Str::random(5),
            'alamat' => Str::random(15),
            'created_at' => Carbon::now()->format('Y-m-d'),
    'updated_at' => Carbon::now()->format('Y-m-d')
        ]);
        DB::table('penjualans')->insert([
            'nama_konsumen' => Str::random(5),
            'alamat' => Str::random(15),
            'created_at' => Carbon::now()->format('Y-m-d'),
    'updated_at' => Carbon::now()->format('Y-m-d')
        ]);
        DB::table('penjualans')->insert([
            'nama_konsumen' => Str::random(5),
            'alamat' => Str::random(15),
            'created_at' => Carbon::now()->format('Y-m-d'),
    'updated_at' => Carbon::now()->format('Y-m-d')
        ]);
    }
}
