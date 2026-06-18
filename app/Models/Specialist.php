<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Specialist extends Model
{
    public function degree()
    {
        return $this->belongsTo(Degree::class, 'degree_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'specialist_id');
    }
}
