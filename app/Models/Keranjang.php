<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjangs';
    protected $fillable = ['user_id', 'item_id', 'ekspedisi_id', 'jarak', 'total_harga'];
}
