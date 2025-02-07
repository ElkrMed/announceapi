<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Announce;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    protected $fillable = ['title'];
    function Announce()
    {
        return $this->hasMany(Announce::class);
    }
    use HasFactory;
}
