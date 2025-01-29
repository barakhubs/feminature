<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThematicArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
        'icon',
        'slug',
    ];

    public function getUrlAttribute()
    {
        return route('thematic-area.show', $this->slug);
    }

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
}
