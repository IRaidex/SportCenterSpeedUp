<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $primaryKey = 'idCard';

    protected $table = 'card';
    public $timestamps = false;
}
