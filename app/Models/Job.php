<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'short_description',
        'location',
        'salary',
        'job_category_id',
        'job_type',
        'deadline',
        'status',
        'document_path',
    ];

    protected $casts = [
        'salary' => 'integer',
    ];

    public function jobCategory()
    {
        return $this->belongsTo(JobCategory::class, 'job_category_id');
    }

    public function getUrlAttribute()
    {
        return route('jobs.show', $this->slug);
    }
    public function getFormattedSalaryAttribute()
    {
        return 'UGX ' . number_format($this->salary, 0, '.', ',');
    }

    // get document path
    public function getDocumentPathUrlAttribute()
    {
        return asset('storage/' . $this->document_path);
    }
}
