<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurricularComponent extends Model
{
    protected $fillable = [
        'code', 'name', 'workload'
    ];
}
