<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'image',
        'status',
        'link',
    ];

    // return image url
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
}
