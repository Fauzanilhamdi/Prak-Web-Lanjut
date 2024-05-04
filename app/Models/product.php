<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $filliable = ['kode_produk','nama_produk','jenis_produk','harga'];
    protected $table = 'produk';
}
