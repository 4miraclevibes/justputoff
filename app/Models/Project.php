<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'thumbnail',
        'description',
        'category',
        'status',
        'demo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projectDetails()
    {
        return $this->hasMany(ProjectDetail::class);
    }
    
    public function projectImages()
    {
        return $this->hasMany(ProjectImage::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class, 'project_technologies');
    }
}
