<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::group(['middleware' => ['cors', 'json.response']], function () {
    // ...
    Route::post('/gets', 'Auth\ApiAuthController@gets')->name('gets.api');
    Route::post('/login', 'Auth\ApiAuthController@login')->name('login.api');
    Route::post('/register', 'Auth\ApiAuthController@register')->name('register.api');
    // ...
});