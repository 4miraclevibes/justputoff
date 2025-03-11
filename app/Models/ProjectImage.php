<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class ProjectImage extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'project_id',
        'image'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
