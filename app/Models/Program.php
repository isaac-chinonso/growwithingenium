<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    public function programcategory()
    {
        return $this->belongsTo('App\Models\ProgramCategory', 'category_id');
    }
}
