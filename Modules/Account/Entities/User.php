<?php

namespace Modules\Account\Entities;

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

    public function role()
    {
        return $this->belongsToMany(Role::class, 'user_roles', 'role_id', 'user_id');
    }
}
