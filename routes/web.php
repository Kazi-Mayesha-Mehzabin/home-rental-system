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


Route::get('/', [HomepageController:: class, 'viewIndexPage'] );
Route::get('/index', [HomepageController:: class, 'viewIndexPage'] );
Route::get('/login2', [HomepageController:: class, 'goToLoginPage'] );
