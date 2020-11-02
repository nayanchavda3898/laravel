<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class batch_type extends Model
{
    protected $table='batch_types';
    protected $fallable = ['batch_name','start_time','end_time','purpose'];
}
