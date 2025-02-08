<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'partner_id',
        'slug',
        'image',
        'description',
        'start_date',
        'end_date',
        'status',
        'thematic_areas'
    ];

    protected $casts = [
        'thematic_areas' => 'array',
    ];

    public function getUrlAttribute()
    {
        return route('project.show', $this->slug);
    }

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function partner ()
    {
        return $this->belongsTo(Partner::class);
    }
}
