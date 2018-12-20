<?php

namespace Bworksio\NovaQuestionable\Models;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $table="questionnaires";
    protected $fillable=['name'];
    
    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }
    
}
