<?php

namespace Modules\Artikel\Entities;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';
    protected $fillable = ['name', 'file', 'location', 'description'];
}
