<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $fillable = ['name'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function questionnaires()
    {
        return $this->hasMany(\App\Questionnaire::class);
    }
}
