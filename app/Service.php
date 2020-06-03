<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $primaryKey = 'idService';

    protected $table = 'service';
    public $timestamps = false;

}
