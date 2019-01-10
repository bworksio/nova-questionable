<?php

namespace Bworksio\NovaQuestionable\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Question extends Model implements Sortable
{
    use SortableTrait;

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
