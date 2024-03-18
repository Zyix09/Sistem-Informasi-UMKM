<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $fillable = ['user_id', 'categoryitem_id', 'nama_barang', 'harga_barang', 'deskripsi', 'stok', 'berat_satuan'];
}
