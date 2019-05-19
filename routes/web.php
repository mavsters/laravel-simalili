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
// Index
Route::get('/users', 'UserController@users')->name('users.users');

// New User
Route::get('/users/new', 'UserController@create')->name('users.create');
Route::post('/users', 'UserController@store');

// Search User
Route::get('/users/search', 'UserController@search')->name('users.search');
// Show User
Route::get('/users/{user}', 'UserController@show')
    ->where('user', '[0-9]+')
    ->name('users.show');

// Edit User
Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit');
Route::put('/users/{user}', 'UserController@update');

// Delete User
Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');
Route::post('/users', 'UserController@store');


# Grade
// Index
Route::get('/grades', 'GradeController@grades')->name('grades.grades');

// New
Route::get('/grades/new', 'GradeController@create')->name('grades.create');
Route::post('/grades', 'GradeController@store');

// Search
Route::get('/grades/search', 'GradeController@search')->name('grades.search');
// Show grade
Route::get('/grades/{grade}', 'GradeController@show')
    ->where('grade', '[0-9]+')
    ->name('grades.show');

// Edit
Route::get('/grades/{grade}/edit', 'GradeController@edit')->name('grades.edit');
Route::put('/grades/{grade}', 'GradeController@update');

// Delete
Route::delete('/grades/{grade}', 'GradeController@destroy')->name('grades.destroy');
Route::post('/grades', 'GradeController@store');


# Docent
// Index
Route::get('/docents', 'DocentController@docents')->name('docents.docents');

// New
Route::get('/docents/new', 'DocentController@create')->name('docents.create');
Route::post('/docents', 'DocentController@store');

// Search
Route::get('/docents/search', 'DocentController@search')->name('docents.search');
// Show docent
Route::get('/docents/{docent}', 'DocentController@show')
    ->where('docent', '[0-9]+')
    ->name('docents.show');

// Edit
Route::get('/docents/{docent}/edit', 'DocentController@edit')->name('docents.edit');
Route::put('/docents/{docent}', 'DocentController@update');

// Delete
Route::delete('/docents/{docent}', 'DocentController@destroy')->name('docents.destroy');
Route::post('/docents', 'DocentController@store');


# Enrollment
// Index
Route::get('/enrollment', 'EnrollmentController@enrollment')->name('enrollment.enrollment');

// New
Route::get('/enrollment/new', 'EnrollmentController@create')->name('enrollment.create');
Route::post('/enrollment', 'EnrollmentController@store');

// Search
Route::get('/enrollment/search', 'EnrollmentController@search')->name('enrollment.search');
// Show
Route::get('/enrollment/{docent}', 'EnrollmentController@show')
    ->where('enrollment', '[0-9]+')
    ->name('enrollment.show');

// Edit
Route::get('/enrollment/{enrollment}/edit', 'EnrollmentController@edit')->name('enrollment.edit');
Route::put('/enrollment/{enrollment}', 'EnrollmentController@update');

// Delete
Route::delete('/enrollment/{enrollment}', 'EnrollmentController@destroy')->name('enrollment.destroy');
Route::post('/enrollment', 'EnrollmentController@store');



# Subject
// Index
Route::get('/subject', 'SubjectController@subject')->name('subject.subject');

// New
Route::get('/subject/new', 'SubjectController@create')->name('subject.create');
Route::post('/subject', 'SubjectController@store');

// Search
Route::get('/subject/search', 'SubjectController@search')->name('subject.search');
// Show
Route::get('/subject/{docent}', 'SubjectController@show')
    ->where('subject', '[0-9]+')
    ->name('subject.show');

// Edit
Route::get('/subject/{subject}/edit', 'SubjectController@edit')->name('subject.edit');
Route::put('/subject/{subject}', 'SubjectController@update');

// Delete
Route::delete('/subject/{subject}', 'SubjectController@destroy')->name('subject.destroy');
Route::post('/subject', 'SubjectController@store');



/*
# Secretary
Route::get('/secretary/new', 'SecretaryController@new');
Route::get('/secretary/modify', 'SecretaryController@modify');
Route::get('/secretary/delete', 'SecretaryController@delete');
Route::get('/secretary/search', 'SecretaryController@search');

# List
Route::get('/list/academic', 'EnrollmentController@new');
Route::get('/list/docent', 'EnrollmentController@modify');
Route::get('/list/general', 'EnrollmentController@delete');
Route::get('/list/grades', 'EnrollmentController@search');
Route::get('/list/preschool', 'EnrollmentController@search');
Route::get('/list/student-primary', 'EnrollmentController@search');

*/



