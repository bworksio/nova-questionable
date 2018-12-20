<?php

namespace Bworksio\NovaQuestionable\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table="questions";
    protected $fillable=['name'];

    public function questionnaires()
    {
        return $this->belongsToMany(Questionnaire::class);
    }
  
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}
