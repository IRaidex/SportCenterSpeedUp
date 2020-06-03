<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    protected $primaryKey = 'idPack';
    
    protected $table = 'pack';
    public $timestamps = false;

}
