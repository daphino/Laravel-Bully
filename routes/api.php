<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('questionares', 'Api\QuestionareController@index');
Route::get('articles', 'Api\ArticleController@index');
Route::get('psychiatrists', 'Api\PsychiatristController@index');
