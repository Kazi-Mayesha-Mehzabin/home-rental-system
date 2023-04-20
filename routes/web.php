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
Route::get('/registration-renter', [HomepageController:: class, 'goToRenterRegistrationPage'] )->name("register-renter");
Route::get('/login-renter', [HomepageController:: class, 'goToRenterLoginPage'] )->name("login-renter");
Route::get('/login-owner', [HomepageController:: class, 'goToOwnerLoginPage'] );
Route::get('/room-details', [HomepageController:: class, 'goToDetailsPage'] )-> name("room-details");
Route::get('/room-details2', [HomepageController:: class, 'goToDetailsPage2'] )-> name("room-details2");
Route::get('/room-details3', [HomepageController:: class, 'goToDetailsPage3'] )-> name("room-details3");

Route::get('/bookNow', [HomepageController:: class, 'goToBookingPage'] )-> name("bookNow");
Route::get('/call-now', [HomepageController:: class, 'goToCallingPage'] )-> name("callNow");
Route::get('/flat-list', [HomepageController:: class, 'goToFlatListPage'] )-> name("flat-list");
Route::get('/payment', [HomepageController:: class, 'goToPaymentPage'] )-> name("payment");
Route::get('/owner-dashboard', [HomepageController:: class, 'goToOwnerDashboard'] )-> name("owner-dashboard");


Route::get('/save-owner', [HomepageController:: class, 'saveOwner'] )-> name("save-owner");
Route::get('/login-owner', [HomepageController:: class, 'loginOwner'] )-> name("login-owner");

