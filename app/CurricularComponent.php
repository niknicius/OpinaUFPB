<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurricularComponent extends Model
{
    protected $fillable = [
        'code', 'name', 'workload'
    ];

    public function teacher(){

        return $this->hasOne('App\Teacher');

    }
}
