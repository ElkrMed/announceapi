<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Announce extends Model
{
    /** @use HasFactory<\Database\Factories\AnnounceFactory> */
    protected $fillable = ['title', 'description', 'price', 'images', 'category_id', 'city'];
    function Category()
    {
        return $this->BelongsTo(Category::class);
    }
    use HasFactory;
}
