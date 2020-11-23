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

Route::get('/', 'FrontController@index')->name('homePage');
Route::get('/awareness', 'FrontController@awareness')->name('awarenessPage');
Route::get('/advocacy', 'FrontController@advocacy')->name('advocacyPage');
Route::get('/webinars', 'FrontController@webinars')->name('webinarsPage');


Route::get('/v', 'VuserController@create')->name('vUserCreatePage');

Route::post('/vreg', 'VuserController@store')->name('vUserCreate');

Route::get('/bn/v', 'VuserController@bnVcreate')->name('banglaVuserCreatePage');
Route::post('/bn/vreg', 'VuserController@bnVstore')->name('banglaVuserCreate');

Route::get('/bn/record', 'VoiceController@bnRecord')->name('banglaRecord');

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


	Route::get('/voice/users', 'VuserController@index')->name('vUsers');
	Route::get('/vuser/{id}', 'VuserController@show')->name('vuserShow');
	Route::delete('/vuser/delete/{id}', 'VuserController@destroy')->name('vuserDelete');



	Route::get('/allvoices', 'VoiceController@index')->name('allVoices');
	Route::get('/lockdown/voices', 'VoiceController@lockdown_voices')->name('lockdownVoices');
	Route::get('/pandemic/voices', 'VoiceController@pandemic_voices')->name('pandemicVoices');



	Route::get('/question-wise-answers', 'VoiceController@questions_answers')->name('questionsAnswers');

	

});
