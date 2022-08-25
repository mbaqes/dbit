<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
 // our routes to be protected will go in here
Route::middleware('auth:api')->group(function () {
   
    Route::post('/logout', 'Auth\ApiAuthController@logout')->name('logout.api');
    Route::post('/addstory', 'Book\BookController@addstory')->name('addstory.api');
    Route::get('/mystories', 'Book\BookController@mystories')->name('mystories.api');
    Route::get('/stories', 'Book\BookController@stories')->name('stories.api');
    Route::get('/comment', 'Comment\CommentController@comment')->name('store.api');
});
// public routes
Route::group(['middleware' => ['cors', 'json.response']], function () {
    // ...
    Route::post('/gets', 'Auth\ApiAuthController@gets')->name('gets.api');
    
    Route::post('/login', 'Auth\ApiAuthController@login')->name('login.api');
    Route::post('/register', 'Auth\ApiAuthController@register')->name('register.api');
    // ...
});

