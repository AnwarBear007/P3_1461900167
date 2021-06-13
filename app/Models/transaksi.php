<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    // protected $keyType = 'string';

    protected $fillable = [
        'id',
        'id_pelanggan',
        'id_barang'
    ];
}
