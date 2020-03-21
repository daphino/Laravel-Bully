<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('questionares', 'Api\QuestionareController@index');
Route::get('articles', 'Api\ArticleController@index');
Route::get('psychiatrists', 'Api\PsychiatristController@index');

Route::prefix('customer')->name('customer.')->namespace('Api')->group(function() {
    Route::post('login', 'CustomerController@login')->name('login');

    Route::post('register', 'CustomerController@register')->name('register');
    Route::resource('chat', 'ChatController');

});

Route::prefix('psychiatrist')->name('psychiatrist.')->namespace('Api\Psychiatrist')->group(function() {
    Route::post('login', 'LoginController@login')->name('login');
    Route::get('info', 'UserController@info')->name('info');
});
