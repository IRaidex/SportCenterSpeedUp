<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
   protected $primaryKey = 'idAddress';
    
    protected $table = 'address';
    public $timestamps = false;
}
