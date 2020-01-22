<?php

namespace Modules\Artikel\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'slug', 'meta_tag_description', 'asigned'];



    public function articles()
    {
        return $this->hasMany(Article::class);
    }

}

