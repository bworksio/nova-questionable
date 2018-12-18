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

Route::get('/api/questionnaires/index', 'Bworksio\NovaQuestionable\Http\Controllers\QuestionnaireController@index');
Route::post('/api/questionnaires/create', 'Bworksio\NovaQuestionable\Http\Controllers\QuestionnaireController@create');
Route::post('/api/questionnaires/update', 'Bworksio\NovaQuestionable\Http\Controllers\QuestionnaireController@update');
Route::post('/api/questionnaires/delete', 'Bworksio\NovaQuestionable\Http\Controllers\QuestionnaireController@delete');
