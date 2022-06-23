<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonTask extends Model
{
    use HasFactory;

    public function lesson()
    {
    	return $this->belongsTo('App\Models\Lesson');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
