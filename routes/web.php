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

// Add Authentication
Auth::routes();

// Home
Route::get('/', 'UserController@index')->middleware('auth');
Route::get('/home', 'UserController@index')->name('home');

# User

Route::get('/users', 'UserController@index')
    ->name('users.index');
Route::get('/users/{user}', 'UserController@show')
    ->where('user', '[0-9]+')
    ->name('users.show');
Route::get('/users/new', 'UserController@create')->name('users.create');
Route::post('/users', 'UserController@store');
Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit');
Route::put('/users/{user}', 'UserController@update');
Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');
Route::post('/users', 'UserController@store');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');


/*Route::get('/user/new', 'UserController@new');
Route::get('/user/modify', 'UserController@modify');
Route::get('/user/delete', 'UserController@delete');
Route::get('/user/search', 'UserController@search');


Route::get('/login', 'UserController@login');

Route::get('/login/executive', 'UserController@executive');
/** Routes Administratorh * /
Route::get('/users', 'UserController@index');

// Prioridad
Route::get('/users/new', function () {
    return "Crear new user";
});



Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');


# DocentDAO
Route::get('/docent/new', 'DocentController@new');
Route::get('/docent/modify', 'DocentController@modify');
Route::get('/docent/delete', 'DocentController@delete');
Route::get('/docent/search', 'DocentController@search');
Route::get('/docent/assign', 'DocentController@assign');

# Enrollment
Route::get('/enrollment/new', 'EnrollmentController@new');
Route::get('/enrollment/modify', 'EnrollmentController@modify');
Route::get('/enrollment/delete', 'EnrollmentController@delete');
Route::get('/enrollment/search', 'EnrollmentController@search');

# Grade
Route::get('/grade/new', 'GradeController@new');
Route::get('/grade/modify', 'GradeController@modify');
Route::get('/grade/delete', 'GradeController@delete');
Route::get('/grade/search', 'GradeController@search');

# Subject
Route::get('/subject/new', 'SubjectController@new');
Route::get('/subject/modify', 'SubjectController@modify');
Route::get('/subject/delete', 'SubjectController@delete');
Route::get('/subject/search', 'SubjectController@search');

# Secretary
Route::get('/secretary/new', 'SecretaryController@new');
Route::get('/secretary/modify', 'SecretaryController@modify');
Route::get('/secretary/delete', 'SecretaryController@delete');
Route::get('/secretary/search', 'SecretaryController@search');

# List
Route::get('/list/academic', 'EnrollmentController@new');
Route::get('/list/docent', 'EnrollmentController@modify');
Route::get('/list/general', 'EnrollmentController@delete');
Route::get('/list/grade', 'EnrollmentController@search');
Route::get('/list/preschool', 'EnrollmentController@search');
Route::get('/list/student-primary', 'EnrollmentController@search');


# Executive
Route::get('/executive/docent', 'ExecutiveController@new');
Route::get('/executive/enrollment', 'ExecutiveController@modify');
Route::get('/executive/list', 'ExecutiveController@delete');
Route::get('/executive/secretary-student', 'ExecutiveController@search');
Route::get('/executive/student', 'ExecutiveController@search');
Route::get('/executive/subject', 'ExecutiveController@search');
Route::get('/executive/user', 'ExecutiveController@search');
*/



