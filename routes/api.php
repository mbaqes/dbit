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
 require __DIR__ . '/Api/RouteBook.php';
 require __DIR__ . '/Api/RouteComment.php';
// public routes
// Route::group(['middleware' => ['cors', 'json.response']], function () {
//     // ...
//     Route::post('/gets', 'Auth\ApiAuthController@gets')->name('gets.api');
    
//     Route::post('/login', 'Auth\ApiAuthController@login')->name('login.api');
//     Route::post('/register', 'Auth\ApiAuthController@register')->name('register.api');
//     // ...
// });

