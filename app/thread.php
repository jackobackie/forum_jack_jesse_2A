<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thread extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
}
