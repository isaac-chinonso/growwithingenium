<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public function Module()
    {
        return $this->belongsTo('App\Models\Module');
    }

    public function LessonVideo()
    {
        return $this->hasMany('App\Models\LessonVideo');
    }

    public function LessonTask()
    {
        return $this->hasMany('App\Models\LessonTask');
    }
}
