<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function grade()
    {
        return $this->hasMany('App\Grade');
    }
}
