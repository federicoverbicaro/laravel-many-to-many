<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'new_image',
        'category_id',
        'client',
        'date',
        'url',
        'slug',

    ];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
