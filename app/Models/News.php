<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'slug',
        'user_id',
    ];
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => url('/storage/berita/' . $image),
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}