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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/clienthomepage', 'App\Http\Controllers\PagesController@clienthomepage');
Route::get('/', 'App\Http\Controllers\PagesController@homepage');
Route::get('/homepage', 'App\Http\Controllers\PagesController@homepage');
Route::get('/threeD', 'App\Http\Controllers\PagesController@threeD');
Route::get('/twoD', 'App\Http\Controllers\PagesController@twoD');
Route::get('/motionGraphics', 'App\Http\Controllers\PagesController@motionGraphics');
Route::get('/logoAnimation', 'App\Http\Controllers\PagesController@logoAnimation');
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