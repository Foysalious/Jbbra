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

Route::get('/', function () {
    return view('welcome');
}); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('employeer/home', 'HomeController@employeeHome')->name('employeeHome')->middleware('is_admin');

Route::group(['prefix'=>'Candidate', 'middleware'=>['auth']], function(){
Route::get('personal', 'Backend\CanPersonalController@index')->name('personal');
Route::get('address', 'Backend\CanAdressController@index')->name('address');
Route::get('education', 'Backend\CanEducationalController@index')->name('education');
Route::get('experience', 'Backend\CanExperienceController@index')->name('experience');
Route::get('language', 'Backend\CanLanguageController@index')->name('language');
Route::get('mailing', 'Backend\CanMailingController@index')->name('mailing');
Route::get('nominee', 'Backend\CanNomineeController@index')->name('nominee');

Route::post('personalAdd', 'Backend\CanPersonalController@store')->name('personalAdd');
Route::post('personalEdit/{personal:id}', 'Backend\CanPersonalController@update')->name('personalupdate');
Route::post('personalEdited/{personal:id}', 'Backend\CanPersonalController@updates')->name('personalupdates');
Route::post('personalDelete/{personal:id}', 'Backend\CanPersonalController@destroy')->name('personalDelete');

Route::post('educationAdd', 'Backend\CanEducationalController@store')->name('educationAdd');
Route::post('educationEdit/{education:id}', 'Backend\CanEducationalController@update')->name('educationUpdate');
Route::post('educationEdited/{education:id}', 'Backend\CanEducationalController@updates')->name('educationUpdates');
Route::post('educationDelete/{education:id}', 'Backend\CanEducationalController@destroy')->name('educationDelete');

Route::post('experienceAdd', 'Backend\CanExperienceController@store')->name('experienceAdd');
Route::post('experienceEdit/{experience:id}', 'Backend\CanExperienceController@update')->name('experienceUpdate');
Route::post('experienceEdited/{experience:id}', 'Backend\CanExperienceController@updates')->name('experienceUpdates');
Route::post('experienceDelete/{experience:id}', 'Backend\CanExperienceController@destroy')->name('experienceDelete');

Route::post('languageAdd', 'Backend\CanLanguageController@store')->name('languageAdd');
Route::post('languageEdit/{language:id}', 'Backend\CanLanguageController@update')->name('languageUpdate');
Route::post('languageEdited/{language:id}', 'Backend\CanLanguageController@updates')->name('languageUpdates');
Route::post('languageDelete/{language:id}', 'Backend\CanLanguageController@destroy')->name('languageDelete');

Route::post('nomineeAdd', 'Backend\CanNomineeController@store')->name('nomineeAdd');
Route::post('nomineeEdit/{nominee:id}', 'Backend\CanNomineeController@update')->name('nomineeUpdate');
Route::post('nomineeEdited/{nominee:id}', 'Backend\CanNomineeController@updates')->name('nomineeUpdates');
Route::post('nomineeDelete/{nominee:id}', 'Backend\CanNomineeController@destroy')->name('nomineeDelete');

Route::post('mailingAdd', 'Backend\CanMailingController@store')->name('mailingAdd');
Route::post('mailingEdit/{mailing:id}', 'Backend\CanMailingController@update')->name('mailingUpdate');
Route::post('mailingEdited/{mailing:id}', 'Backend\CanMailingController@updates')->name('mailingUpdates');
Route::post('mailingDelete/{mailing:id}', 'Backend\CanMailingController@destroy')->name('mailingDelete');

Route::post('addressAdd', 'Backend\CanAdressController@store')->name('addressAdd');
Route::post('addressEdit/{address:id}', 'Backend\CanAdressController@update')->name('addressUpdate');
Route::post('addressEdited/{address:id}', 'Backend\CanAdressController@updates')->name('addressUpdates');
Route::post('addressDelete/{address:id}', 'Backend\CanAdressController@destroy')->name('addressDelete');


// });
// Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function(){ 

Route::get('verified', 'Backend\verifiedController@index')->name('verified');
Route::get('notVerified', 'Backend\verifiedController@notVerified')->name('Notverified');
Route::post('verifiedAdd', 'Backend\verifiedController@store')->name('verifiedAdd');
Route::post('verifiedEdit/{user:id}', 'Backend\verifiedController@update')->name('verifiedUpdate');
Route::post('verifiedDelete/{user:id}', 'Backend\verifiedController@destroy')->name('verifiedDelete'); 

Route::get('approved/{user:id}', 'Backend\verifiedController@approved')->name('Insverified');
Route::get('disapproved/{user:id}', 'Backend\verifiedController@disApproved')->name('disverified');

Route::get('UsersCreation', 'Backend\UsersController@index')->name('usersIndex');
Route::get('UserCheck/{user:id}', 'Backend\UsersController@edit')->name('UserCheck');
Route::post('Usersaddition', 'Backend\UsersController@store')->name('usersAddition');
Route::post('Usersdelete/{user:id}', 'Backend\UsersController@destroy')->name('userDelete');

Route::group(['prefix' => 'my-profile'], function(){
    Route::get('/{user:id}','Backend\ProfileController@edit')->name('profile.edit');
    Route::post('/update/{user:id}','Backend\ProfileController@update')->name('profile.update');
    Route::post('/update-password/{user:id}','Backend\ProfileController@updatePassword')->name('password.update');
    Route::post('/delete-profile/{user:id}','Backend\ProfileController@destroy')->name('profile.delete');
});

});