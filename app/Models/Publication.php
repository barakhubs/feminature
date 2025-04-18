<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'file_path',
        'type',
        'published_at',
        'status',
    ];

    // get filepath
    public function getFilePathAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
