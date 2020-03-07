<?php
Auth::routes(['register'=>false, 'reset'=>false]);

Route::middleware('auth')->namespace('Admin')->group(function() {

  Route::prefix('/admin')->name('admin.')->group(function() {

      Route::get('', function (){
         return redirect()->route('admin.dashboard');
      });

      Route::get('dashboard', 'DashboardController@index')->name('dashboard');

      Route::resource('questionare', 'QuestionareController')->except('show');
      Route::delete('questionare/delete/all', 'QuestionareController@destroyAll')->name('questionare.destroy.all');

      Route::resource('psychiatrist', 'PsychiatristController')->except('show');
      Route::delete('psychiatrist/delete/all', 'PsychiatristController@destroyAll')->name('psychiatrist.destroy.all');

      Route::resource('article', 'ArticleController')->except('show');
      Route::post('article/picture/upload', 'ArticleController@pictureUpload')->name('article.picture.upload');
      Route::delete('article/delete/all', 'ArticleController@destroyAll')->name('article.destroy.all');

      Route::get('profile', 'ProfileController')->name('profile.index');
      Route::get('change-password', 'ProfileController@changePasswordForm')->name('change.password');
      Route::post('change-password', 'ProfileController@changePassword')->name('change.password');
  });

});
