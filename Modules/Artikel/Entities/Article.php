<?php

namespace Modules\Artikel\Entities;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function users()
    {
        return $this->belongsTo(\Modules\Admin\Entities\User::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'article_tag')->withTimestamps();
    }
}
