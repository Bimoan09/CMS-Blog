<?php

namespace Modules\Artikel\Entities;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tags';
    protected $fillable = ['name'];
    
}
