<?php

namespace Modules\Artikel\Entities;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
