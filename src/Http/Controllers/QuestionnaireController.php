<?php

namespace Bworksio\NovaQuestionable\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Questionnaires;

class QuestionnaireController
{
    public function index(){
        Questionnaires::all();
    }

    public function create(){
        
    }

    public function update(){
        
    }

    public function delete(){
        
    }
}
