<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Degree extends Model
{
    public function specialists()
    {
        return $this->hasMany(Specialist::class, 'degree_id');
    }
}
