<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LembagaDesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kode',
        'hukum',
        'logo',
        'alamat'
    ];
}
