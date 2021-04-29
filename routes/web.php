<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideosController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Auth::routes();
  
Route::get('/home', [HomeController::class, 'index'])->name('home');
  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('videos', VideosController::class);
});

Route::get('/clienthomepage', 'App\Http\Controllers\PagesController@clienthomepage');
Route::get('/', 'App\Http\Controllers\PagesController@homepage');
Route::get('/homepage', 'App\Http\Controllers\PagesController@homepage');
Route::get('/threeD', 'App\Http\Controllers\PagesController@threeD');
Route::get('/twoD', 'App\Http\Controllers\PagesController@twoD');
Route::get('/motionGraphics', 'App\Http\Controllers\PagesController@motionGraphics');
Route::get('/logoAnimation', 'App\Http\Controllers\PagesController@logoAnimation');
Route::get('/clienthomepage', 'App\Http\Controllers\PagesController@clienthomepage');
Route::get('/clientthreeD', 'App\Http\Controllers\PagesController@clientthreeD');
Route::get('/clienttwoD', 'App\Http\Controllers\PagesController@clienttwoD');
Route::get('/clientmotionGraphics', 'App\Http\Controllers\PagesController@clientmotionGraphics');
Route::get('/clientlogoAnimation', 'App\Http\Controllers\PagesController@clientlogoAnimation');
Route::get('/invoices', 'App\Http\Controllers\PagesController@invoices');
Route::get('/videos', 'App\Http\Controllers\PagesController@videos');
//Route::get('/contact', 'App\Http\Controllers\PagesController@contact');

Route::resource('contacts', 'App\Http\Controllers\ContactsController');
//contact routing
Route::get('/contacts', [
    'uses' => 'App\Http\Controllers\ContactsController@create'
]);
Route::post('/contacts', [
    'uses' => 'App\Http\Controllers\ContactsController@store',
    'as' => 'contact.store'
]);
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
