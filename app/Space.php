<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\SpacePhoto;

class Space extends Model
{
    protected $guarded = [];

    public function photos()
    {
        return $this->hasMany(SpacePhoto::class, 'space_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
