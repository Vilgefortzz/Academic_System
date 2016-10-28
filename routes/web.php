<?php

// MAIN PAGE

Route::get('/', function (){

    return view ('main_page');

});

// Login

Route::get('/login', 'AuthController@login');
Route::post('/handleLogin', 'AuthController@handleLogin');

// Logout

Route::post('/handleLogout', 'AuthController@handleLogout');

// Home dashboards

Route::get('/students/{student}/home', 'StudentsController@home');
Route::get('/teachers/{teacher}/home', 'TeachersController@home');

// Students

Route::get('/students', 'StudentsController@index');
Route::get('/students/{student}', 'StudentsController@show');
Route::get('/students/{student}/subjects', 'StudentsController@showSubjects');
Route::get('/students/{student}/edit', 'StudentsController@editPassword');
Route::patch('/students/{student}', 'StudentsController@changePassword');

// Teachers

Route::get('/teachers', 'TeachersController@index');
Route::get('/teachers/{teacher}', 'TeachersController@show');
Route::get('/teachers/{teacher}/edit', 'TeachersController@editPassword');
Route::patch('/teachers/{teacher}', 'TeachersController@changePassword');

// Subjects

Route::get('/subjects', 'SubjectsController@index');
Route::get('/subjects/{subject}', 'SubjectsController@show');
Route::post('/subjects/{subject}/students', 'SubjectsController@addStudent');
Route::post('/subjects/{subject}/teachers', 'SubjectsController@addTeacher');
