<?php
use Illuminate\Support\Facades\Route;
Route::middleware('auth:api')->prefix('book') ->group(function () {
   
    Route::post('/logout', 'Auth\ApiAuthController@logout')->name('logout.api');
    Route::post('/addstory', 'Book\BookController@addstory')->name('addstory.api');
    Route::get('/mystories', 'Book\BookController@mystories')->name('mystories.api');
    Route::get('/stories', 'Book\BookController@stories')->name('stories.api');
});