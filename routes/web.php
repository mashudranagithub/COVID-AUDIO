<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/demo', function () {
//     return view('demo.index');
// })->name('index');

Route::get('/', function(){
	return view('covid.index');
});

// Route::post('upload', 'audioController@store')->name('audioSave');
// Route::get('audio-list', 'audioController@index')->name('audioList');


Route::get('/v', 'VuserController@create')->name('vUserCreatePage');

Route::post('/vreg', 'VuserController@store')->name('vUserCreate');

Route::get('/record', 'VoiceController@record')->name('record');

Route::post('/voiceup', 'VoiceController@store')->name('recordStore');


Auth::routes();

Route::group(['middleware' => ['auth']], function() {

	Route::get('/dashboard', 'HomeController@index')->name('home');

	Route::get('/questions', 'QuestionController@index')->name('questions');
	Route::get('/question/create', 'QuestionController@create')->name('questionCreate');
	Route::post('/question/store', 'QuestionController@store')->name('questionStore');
	Route::get('/question/edit/{id}', 'QuestionController@edit')->name('questionEdit');
	Route::put('/question/update/{id}', 'QuestionController@update')->name('questionUpdate');
	Route::delete('/question/delete/{id}', 'QuestionController@destroy')->name('questionDelete');

	

});
