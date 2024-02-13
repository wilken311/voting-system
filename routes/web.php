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

Route::get('/', 'HomeController@index');

Auth::routes(); 

//ADMIN ROUTE
Route::group(['namespace'=>'Admin','prefix'=>'admin','as'=>'admin.','middleware'=>['auth','role:Administrator']],function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
    //Student
    Route::get('/students/voteresult', 'StudentController@studentvote')->name('students.voteresult'); 
    Route::get('/students/useraccount', 'StudentController@useraccount')->name('students.useraccount'); 
    Route::get('/students/{id}/delete', 'StudentController@delete')->name('student.delete');
    Route::resource('students', 'StudentController');
    //candidates
    
    Route::get('/candidates/SSGOfficer', 'CandidatesController@SSGOfficer')->name('candidates.SSGOfficer');
    Route::get('/candidates/votes', 'CandidatesController@voteResult')->name('candidates.voteResult'); 
    Route::get('/candidates/FinalCandidates', 'CandidatesController@FinalCandidates')->name('candidates.FinalCandidates');
    Route::resource('candidates', 'CandidatesController');
    
    //votes
    Route::get('/votes/candidacy', 'VoteCodeController@candidacy')->name('votes.candidacy');
    Route::get('/votes/timer', 'VoteCodeController@timer')->name('votes.timer');
   
    Route::patch('/votes/{id}', 'VoteCodeController@updateVotersCode')->name('votes.updateVotersCode');
    Route::resource('votes', 'VoteCodeController');
   
});



//STUDENT ROUTE
Route::group(['namespace'=>'Student','prefix'=>'student','as'=>'student.','middleware'=>['auth','role:Student']],function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('candidates', 'CandidatesController');
    Route::get('/votes/result', 'VoteController@voteResult')->name('students.voteResult'); 
    Route::resource('votes', 'VoteController');
});







