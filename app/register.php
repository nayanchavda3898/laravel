<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    //
    protected $table='registers';
    protected $fallable = ['name','mail','contact','gender','age','password'];
}
