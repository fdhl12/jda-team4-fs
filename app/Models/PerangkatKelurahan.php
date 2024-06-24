<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerangkatKelurahan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'email',
        'jabatan_id',
        'nip',
        'alamat',
    ];
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
