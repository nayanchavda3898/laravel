<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    //
    protected $table='register';
    protected $fallable = ['name','mail','contact','gender','age','password'];
}
