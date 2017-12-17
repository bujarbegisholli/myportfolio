<?php

Route::get('/','PageController@index')->name('home');
Route::get('about','PageController@about')->name('about');
Route::get('cv','CVController@index')->name('cv');
Route::get('contact','PageController@contact')->name('contact');

Route::group(['middleware'=>'auth'],function(){
  Route::resource('project','ProjectController');
  Route::resource('education','EduController');
  Route::resource('skills','SkillController',['except'=>['edit','update','show']]); 
});

// Auth Routes
Auth::routes();
Route::get('logout','Auth\LoginController@logout')->name('logout');
