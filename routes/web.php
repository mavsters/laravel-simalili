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
// Index Route::get('/users', 'UserController@users')->name('users.users');

// New User
Route::get('/users', 'UserController@create')->name('users.create');
Route::post('/users', 'UserController@store');

// Search User Route::get('/users/search', 'UserController@search')->name('users.search');
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
// Index Route::get('/grades', 'GradeController@grades')->name('grades.grades');

// New
Route::get('/grades', 'GradeController@create')->name('grades.create');
Route::post('/grades', 'GradeController@store');

// Search Route::get('/grades/search', 'GradeController@search')->name('grades.search');
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
// Index Route::get('/docents', 'DocentController@docents')->name('docents.docents');

// New
Route::get('/docents', 'DocentController@create')->name('docents.create');
Route::post('/docents', 'DocentController@store');

// Search Route::get('/docents/search', 'DocentController@search')->name('docents.search');
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


# Subjects
// Index Route::get('/subjects', 'SubjectController@subjects')->name('subjects.subjects');

// New
Route::get('/subjects', 'SubjectController@create')->name('subjects.create');
Route::post('/subjects', 'SubjectController@store');

// Search Route::get('/subjects/search', 'SubjectController@search')->name('subjects.search');
// Show subject
Route::get('/subjects/{subject}', 'SubjectController@show')
    ->where('subject', '[0-9]+')
    ->name('subjects.show');

// Edit
Route::get('/subjects/{subject}/edit', 'SubjectController@edit')->name('subjects.edit');
Route::put('/subjects/{subject}', 'SubjectController@update');

// Delete
Route::delete('/subjects/{subject}', 'SubjectController@destroy')->name('subjects.destroy');
Route::post('/subjects', 'subjectController@store');



# Enrollment
// Index Route::get('/enrollments', 'EnrollmentController@enrollments')->name('enrollments.enrollments');

// New
Route::get('/enrollments', 'EnrollmentController@create')->name('enrollments.create');
Route::post('/enrollments', 'EnrollmentController@store');

// Search Route::get('/enrollments/search', 'EnrollmentController@search')->name('enrollments.search');
// Show enrollment
Route::get('/enrollments/{enrollment}', 'EnrollmentController@show')
    ->where('enrollment', '[0-9]+')
    ->name('enrollments.show');

// Edit
Route::get('/enrollments/{enrollment}/edit', 'EnrollmentController@edit')->name('enrollments.edit');
Route::put('/enrollments/{enrollment}', 'EnrollmentController@update');

// Delete
Route::delete('/enrollments/{enrollment}', 'EnrollmentController@destroy')->name('enrollments.destroy');
Route::post('/enrollments', 'EnrollmentController@store');


# Student
// Index Route::get('/students', 'StudentController@students')->name('students.students');

// Search Route::get('/students/search', 'StudentController@search')->name('students.search');
// Show subject
Route::get('/students/{student}', 'StudentController@show')
    ->where('student', '[0-9]+')
    ->name('student.show');




/*
 *

# List
Route::get('/list/academic', 'EnrollmentController@new');
Route::get('/list/docent', 'EnrollmentController@modify');
Route::get('/list/general', 'EnrollmentController@delete');
Route::get('/list/grades', 'EnrollmentController@search');
Route::get('/list/preschool', 'EnrollmentController@search');
Route::get('/list/student-primary', 'EnrollmentController@search');

*/



