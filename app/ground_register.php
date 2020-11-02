<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ground_register extends Model
{
    //
    protected $table='ground_register';
    protected $fallable = ['name','email','contact','purpose','fdate','days','amount','uid','status'];
}
