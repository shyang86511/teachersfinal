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

Route::get('/classification/{id}/del', 'ClassificationController@del')
    ->where('id', '[0-9]+')
    ->name('informations.del');


Route::get('/informations/quit', 'InformationsController@quit')
    ->name('students.quit');

Route::get('/informations', 'InformationsController@index')
    ->name('students.index');


Route::get('/informations/create', 'InformationsController@create')
    ->name('informations.create');

Route::patch('/informations/{id}', 'InformationsController@update')
    ->where('id', '[0-9]+')
    ->name('informations.update');

Route::post('/informations', 'InformationsController@store')
    ->where('id', '[0-9]+')
    ->name('informations.store');


Route::get('/informations/{id}/edit', 'InformationsController@edit')
    ->where('id', '[0-9]+')
    ->name('informations.edit');

Route::get('/informations/{id}/delete', 'InformationsController@destroy')
    ->where('id', '[0-9]+')
    ->name('informations.destroy');

Route::get('/informations/{id}/restore', 'InformationsController@restore')
    ->where('id', '[0-9]+')
    ->name('informations.restore');

Route::get('/informations/{id}/del', 'InformationsController@del')
    ->where('id', '[0-9]+')
    ->name('informations.del');
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