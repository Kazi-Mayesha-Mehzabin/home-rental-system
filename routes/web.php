<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

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

Route::get('/Mayesha', function () {
    return view('welcome');
});


Route::get('/', [HomepageController:: class, 'viewIndexPage'] ) -> name("index2");
Route::get('/index', [HomepageController:: class, 'viewIndexPage'] );
Route::get('/login2', [HomepageController:: class, 'goToLoginPage'] );
Route::get('/registration-owner', [HomepageController:: class, 'goToOwnerRegistrationPage'] );
Route::get('/registration-renter', [HomepageController:: class, 'goToRenterRegistrationPage'] );
Route::get('/login-renter', [HomepageController:: class, 'goToRenterLoginPage'] );
Route::get('/login-owner', [HomepageController:: class, 'goToOwnerLoginPage'] );
Route::get('/room-details', [HomepageController:: class, 'goToDetailsPage'] )-> name("room-details");
Route::get('/room-details2', [HomepageController:: class, 'goToDetailsPage2'] )-> name("room-details2");
