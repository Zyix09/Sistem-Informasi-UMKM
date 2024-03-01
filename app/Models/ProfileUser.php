<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileUser extends Model
{
    use HasFactory;

    protected $table = 'profile_user';

    protected $fillable = [
        'id_user',
        'jenis_kelamin',
        'telepon_user',
        'foto_user',
        'alamat_user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
