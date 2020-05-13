<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    
    protected $primaryKey = 'idArticle';
    
    protected $table = 'article';
    public $timestamps = false;
}
