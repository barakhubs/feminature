<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThematicAreaProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'thematic_area_id',
        'project_id'
    ];
}
