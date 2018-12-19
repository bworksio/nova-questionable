<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

Route::get('/api/hi', 'Bworksio\NovaQuestionable\Http\Controllers\BaseController@hello');

Route::get('/api/questionnaire/list', 'Bworksio\NovaQuestionable\Http\Controllers\QuestionnaireController@list');
Route::post('/api/questionnaire/create', 'Bworksio\NovaQuestionable\Http\Controllers\QuestionnaireController@create');
Route::post('/api/questionnaire/update', 'Bworksio\NovaQuestionable\Http\Controllers\QuestionnaireController@update');
Route::post('/api/questionnaire/delete', 'Bworksio\NovaQuestionable\Http\Controllers\QuestionnaireController@delete');
