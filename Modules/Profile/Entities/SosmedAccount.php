<?php

namespace Modules\Profile\Entities;

use Illuminate\Database\Eloquent\Model;

class SosmedAccount extends Model
{
    protected $table   = 'sosmed_accounts';
    protected $fillable = ['name', 'profile_id'];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
