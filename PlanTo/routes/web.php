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

// Route::get('/timeline', 'PlanToController@timeline');
// Route::get('/hello', function(){
//     return 'PlanToController@timeline';
// });


Auth::routes();

// Route::get('/home', 'PostsController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::group(['middleware' => 'auth'], function() {
    Route::get('users/serch', 'UsersController@serch')->name('serch');
    Route::resource('users', 'UsersController', ['only' => ['index', 'show', 'edit', 'update']]);
    Route::post('users/{user_id}/follow', 'UsersController@follow',['user_id'=>'{user_id}'])->name('follow');
    Route::delete('users/{user_id}/unfollow', 'UsersController@unfollow',['user_id'=>'{user_id}'])->name('unfollow');
    Route::resource('posts', 'PostsController', ['only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']]);
    Route::resource('calendars', 'CalendarsController', ['only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']]);
    Route::get('calendars/{day?}', 'CalendarsController@show');
    Route::get('/calendars/{year?}/{month?}', 'CalendarsController@index_prev_next');
});