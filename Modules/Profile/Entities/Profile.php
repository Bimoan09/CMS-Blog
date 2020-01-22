<?php

namespace Modules\Profile\Entities;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = [
                        'first_name', 
                        'last_name', 
                        'avatar', 
                        'gender', 
                        'date_of_birth',
                        'address', 
                        'phone', 
                        'user_id', 
                        'province_id',
                        'city_id', 
                        'district_id',
                        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sosmed_account()
    {
        return $this->hasOne(SosmedAccount::class);
    }
}
