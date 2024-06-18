<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'slug',
        'user_id',
        'category_id',
    ];
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => url('/storage/articles/' . $image),
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
