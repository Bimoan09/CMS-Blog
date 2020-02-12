<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'username', 'user_type', 'email_verivied_at'];


    public function articles()
    {
        return $this->hasMany(\Modules\Artikel\Entities\Article::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
