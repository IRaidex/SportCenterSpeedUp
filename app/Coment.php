<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    protected $primaryKey = 'idComent';

    protected $table = 'coment';
    public $timestamps = false;
}
