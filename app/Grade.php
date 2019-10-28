<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'classes';

    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function curricular_component()
    {
        return $this->belongsTo('App\CurricularComponent');
    }
}
