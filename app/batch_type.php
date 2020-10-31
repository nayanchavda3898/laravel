<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class batch_type extends Model
{
    protected $table='batch_types';
    protected $fallable = ['batch_name','batch_time','purpose'];
}
