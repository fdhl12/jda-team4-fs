<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileKelurahan extends Model
{
    use HasFactory;
    protected $fillable = [
        'alamat',
        'no_telp',
        'email',
    ];
}
