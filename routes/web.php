<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/classification/quit', 'ClassificationController@quit')
    ->name('classification.quit');

Route::get('/classification', 'ClassificationController@index')
    ->name('classification.index');


Route::get('/classification/{id}', 'ClassificationController@show')
    ->where('id', '[0-9]+')
    ->name('classification.show');

Route::get('/classification/create', 'ClassificationController@create')
    ->name('classification.create');

Route::patch('/classification/{id}', 'ClassificationController@update')
    ->where('id', '[0-9]+')
    ->name('classification.update');

Route::post('/classification', 'ClassificationController@store')
    ->where('id', '[0-9]+')
    ->name('classification.store');


Route::get('/classification/{id}/edit', 'ClassificationController@edit')
    ->where('id', '[0-9]+')
    ->name('classification.edit');

Route::get('/classification/{id}/delete', 'ClassificationController@destroy')
    ->where('id', '[0-9]+')
    ->name('classification.destroy');

Route::get('/classification/{id}/restore', 'ClassificationController@restore')
    ->where('id', '[0-9]+')
    ->name('classification.restore');


Route::get('/students/quit', 'StudentsController@quit')
    ->name('students.quit');

Route::get('/students', 'StudentsController@index')
    ->name('students.index');


Route::get('/students/{id}', 'StudentsController@show')
    ->where('id', '[0-9]+')
    ->name('students.show');

Route::get('/students/create', 'StudentsController@create')
    ->name('students.create');

Route::patch('/students/{id}', 'StudentsController@update')
    ->where('id', '[0-9]+')
    ->name('students.update');

Route::post('/students', 'StudentsController@store')
    ->where('id', '[0-9]+')
    ->name('students.store');


Route::get('/students/{id}/edit', 'StudentsController@edit')
    ->where('id', '[0-9]+')
    ->name('students.edit');

Route::get('/students/{id}/delete', 'StudentsController@destroy')
    ->where('id', '[0-9]+')
    ->name('students.destroy');

Route::get('/students/{id}/restore', 'StudentsController@restore')
    ->where('id', '[0-9]+')
    ->name('students.restore');
/*
Route::group(['as' => 'teachers.', 'prefix' => 'teachers'], function () {
    // url: /teacher/
    Route::get('/', 'TeachersController@index');

    // url: /teacher/45
    Route::get('/{id}', 'TeachersController@show')
        ->where('id', '[0-9]+')
        ->name('show');

    // url: /teacher/create
    Route::get('/create', 'TeachersController@create')
        ->name('create');

    // url: /teacher/store
    Route::post('/store', 'TeachersController@store');
});
*/