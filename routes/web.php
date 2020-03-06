<?php
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->group(function() {

  Route::prefix('/admin')->name('admin.')->group(function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('questionare', 'QuestionareController');
    Route::delete('questionare/delete/all', 'QuestionareController@destroyAll')->name('questionare.destroy.all');
  });

});