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
    return redirect('firstpage');
});
// firstpage
Route::get('/firstpage',function(){
    return view('/firstpage');
});


// tutor
Route::get('/index', function () {
    return view('index');
});

Route::get('/tutorhome','TutorHomeController@index');

Route::get('/tutorhome_datatable','TutorHomeController@showSchedule');

Route::get('/tutorregister', function () {
    return view('tutor.register');
});
Route::get('/tutorprofile', function () {
    return view('tutor.profile');
});

Route::get('/tutorhistory','TutorHistoryController@index');

Route::get('/tutormycourse','TutorMycourseController@index');

Route::get('/tutorshowdetail', function () {
    return view('tutor.showdetail');
});
Route::get('/tutorcreatecourse', function () {
    return view('tutor.createcourse');
});
Route::get('/tutorfavorite', function () {
    return view('tutor.favorite');
});

// learner
Route::get('/learnerhome','LearnerHomeController@index');

Route::get('/learnerhome_datatable','LearnerHomeController@showSchedule');

Route::get('/learnerregister', function () {
    return view('learner.register');
});
Route::get('/learnerprofile', 'LearnerProfileController@index');

Route::get('/learnerhistory','LearnerHistoryController@index');

Route::get('/learnermycourse','LearnerMycourseController@index');

Route::get('/learnershowdetail', function () {
    return view('learner.showdetail');
});
Route::get('/learnercreatecourse', function () {
    return view('learner.createcourse');
});
Route::get('/learnerfavorite', function () {
    return view('learner.favorite');
});

Route::get('/learnercoursestatus', function () {
    return view('learner.coursestatus');
});

Auth::routes();

Route::post('/loginsuccess','LoginController@login');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adddetail', function () {
    return view('adddetail');
});

Route::get('/registercream', function () {
    return view('registercream');
});

Route::get('/createcourse_tutor', function () {
    return view('createcourse_tutor');
});