<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class DetailPenjualan extends Controller
{
    //
    public function perDay(){
        $penjualan = Penjualan::select('id','nama_konsumen','alamat','created_at',)
                    ->where('created_at','>', Carbon::now()
                    ->subDays(10))
                    ->get()->groupBy(function($date){
                        return Carbon::parse($date->created_at)->format('D');
                    });
        return $penjualan;
    }
}
