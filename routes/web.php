<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShareSocialController;

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

// Route::get('/deyo', function () {
//     return view('station2');
// });

Route::get('/detail/{id}', [ShareSocialController::class,'shareSocial']);

Route::get('/','\App\Http\Controllers\IndexController@index');
Route::get('/catalog','\App\Http\Controllers\IndexController@catalog');
Route::get('/kategori/tema/{id}','\App\Http\Controllers\IndexController@Ktgtema');
Route::get('/kategori/ukuran/{id}','\App\Http\Controllers\IndexController@Ktgukuran');

Route::get('/detail/{id}','\App\Http\Controllers\IndexController@detail');
Route::post('/komen','\App\Http\Controllers\IndexController@komentar');
Route::get('/cari','\App\Http\Controllers\IndexController@cari');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin','\App\Http\Controllers\Admin\DataController@index');
    Route::get('/add-product','\App\Http\Controllers\Admin\AdminController@index');
    Route::get('/commentar','\App\Http\Controllers\Admin\KomenController@index');
    Route::get('/delete/commentar/{id}','\App\Http\Controllers\Admin\KomenController@delete');
    Route::get('/add-tema','\App\Http\Controllers\Admin\AdminController@tema');
    Route::post('/submit-tema','\App\Http\Controllers\Admin\AdminController@storeTema');
    Route::get('/delete/tema/{id}','\App\Http\Controllers\Admin\AdminController@deleteTema');
    Route::get('/add-ukuran','\App\Http\Controllers\Admin\AdminController@ukuran');
    Route::post('/submit-ukuran','\App\Http\Controllers\Admin\AdminController@storeUkuran');
    Route::get('/delete/ukuran/{id}','\App\Http\Controllers\Admin\AdminController@deleteUkuran');

    Route::view('/logout','admin.logout');
    Route::post('/create','\App\Http\Controllers\Admin\DataController@store');
    Route::post('/edit/{blog}','\App\Http\Controllers\Admin\DataController@update');
    Route::get('/detail/produk/{id}','\App\Http\Controllers\Admin\DataController@detail');
    Route::get('/delete/produk/{id}','\App\Http\Controllers\Admin\DataController@delete');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

