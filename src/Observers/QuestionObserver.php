<?php

namespace Bworksio\NovaQuestionable\Observers;

use Bworksio\NovaQuestionable\Models\Question;
use Atomescrochus\StringSimilarities\Compare;

class QuestionObserver
{
    /**
     * Handle the question "creating" event.
     *
     * @param  \Bworksio\NovaQuestionable\Models\Question  $question
     * @return void
     */
    public function creating(Question $question)
    {
        $existingQuestions = Question::all();
        $comparison = new Compare();
        $results = Array();
        foreach ($existingQuestions as $existingQuestion)
        {
            $results[] = $comparison->smg($existingQuestion->name, $question->name);
        }

        foreach ($results as $one)
        {
            if ($one > 0.85 && !$question["force"]) {
                abort(500, 'This question is similar with an existing one');
            }
        }

        unset($question["force"]);
    }
    public function saving(Question $question)
    {
        unset($question["force"]);
    }
}
