<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::middleware('auth:api')->prefix('comment') ->group(function () {
    Route::get('/comment', 'Comment\CommentController@comment')->name('store.api');
});