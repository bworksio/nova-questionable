<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends \Bworksio\NovaQuestionable\Models\Questionnaire
{
    public function plant()
    {
        return $this->belongsTo(\App\Plant::class);
    }

    public function layers(){
        return $this->hasMany(\App\Layer::class);
    }
}
