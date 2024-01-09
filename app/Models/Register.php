<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illunatmie\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Register extends Model
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'npwp',
        'nama',
        'no_ktp',
        'alamat_ktp',
        'ttl',
        'jenis_kelamin',
        'email',
        'no_hp',
        'no_telp',
        'no_npwp',
        'kependudukan',
    ];

    public function register()
    {
        return $this->belongTo(Register::class);
    }

}
