<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileUmkm extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'profile_umkm';

    protected $fillable = [
        'id_user',
        'nik',
        'nama_toko',
        'foto_toko',
        'alamat_toko',
        'deskripsi_toko',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
