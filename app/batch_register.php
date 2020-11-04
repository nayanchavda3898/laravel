<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class batch_register extends Model
{
    protected $table='batch_registers';
    protected $fallable = ['name','email','contact','batch_type','batch_time','fdate','days','amount','uid','status'];
}
