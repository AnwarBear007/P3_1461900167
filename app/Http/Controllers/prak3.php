<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\pelanggan;
use App\Models\transaksi;

class prak3 extends Controller
{
    public function view(){
        $prak3=transaksi::join('barang','transaksi.id_barang', '=', 'barang.id')->join('pelanggan','transaksi.id_pelanggan', '=', 'pelanggan.id')->get();
        // dd($prak4);
        return view('Prak0167', [
            'prak3' => $prak3,
        ]);

    }
}
