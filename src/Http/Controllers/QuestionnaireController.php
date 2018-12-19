<?php

namespace Bworksio\NovaQuestionable\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Bworksio\NovaQuestionable\Models\Questionnaire;

class QuestionnaireController
{
    public function list(){
        return Response()->json(Questionnaire::all()->toArray());
    }

    public function create(Request $request) {
        $questionnaire = new Questionnaire();
        $questionnaire->name = $request->name;
        $questionnaire->save();
    }

    public function update() {
        
    }

    public function delete() {
        
    }
}
