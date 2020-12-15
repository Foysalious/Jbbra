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

});
