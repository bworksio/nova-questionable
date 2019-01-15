<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    protected $fillable = ['name'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function departments()
    {
        return $this->hasMany('App\Department');
    }
}
