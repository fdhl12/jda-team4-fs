<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demografi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kriteria',
        'jumlah',
        'demografi_categories_id'
    ];

    public function kategori()
    {

        return $this->belongsTo(DemografiCategories::class, 'demografi_categories_id');
    }
}
