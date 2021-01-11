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

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', function () {
    return view('auth.login');
});

Route::view('/dashboard', 'dashboard')->middleware('auth')->name('dashboard');
Route::group(['middleware' => 'auth:admin'], function () {
});

Auth::routes();

// -----------------------------user role-----------------------------------------
Route::get('userRole','App\Http\Controllers\HomeController@userRole')->name('userRole');
Route::get('dashboard','App\Http\Controllers\HomeController@index')->name('dashboard');

// ======================== avatar ======================== //
Route::post('profile', 'App\Http\Controllers\HomeController@update_avatar')->name('profile');

// -----------------------------login-----------------------------------------
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@authenticate');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// ------------------------------register---------------------------------------
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@storeUser')->name('register');

// -----------------------------forget password ------------------------------
Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail')->name('forget-password');
Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail')->name('forget-password');

Route::get('reset-password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword');
Route::post('reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@updatePassword');

// -----------------------------login facebook ------------------------------
Route::get('/redirect', 'App\Http\Controllers\FacebookController@redirect');
Route::get('/callback', 'App\Http\Controllers\FacebookController@callback');

// -----------------------------route infomation staff ------------------------------
Route::get('form/information-staff/new','App\Http\Controllers\informationStaffController@viewInformationStaff')->name('form/information-staff/new');

// -----------------------------route form ------------------------------
Route::get('form/employee/new','App\Http\Controllers\employeeController@viewEmployee')->name('form/employee/new');
Route::post('form/employee/save','App\Http\Controllers\employeeController@save')->name('form/employee/save');
Route::get('report','App\Http\Controllers\employeeController@report')->name('report');
// ------------------------ delete ------------------------- //
Route::post('report','App\Http\Controllers\employeeController@search')->name('search');

// ------------------------ delete ------------------------- //
Route::get('delete/{id}','App\Http\Controllers\employeeController@delete')->name('delete');
// ------------------------ update ------------------------ //
Route::post('update','App\Http\Controllers\employeeController@update')->name('update');


Route::get('show','App\Http\Controllers\RoadtaxController@show')->name('show');
// ------------------------ delete ------------------------- //
Route::post('show','App\Http\Controllers\RoadtaxController@show')->name('show');


