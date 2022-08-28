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
 
Route::prefix('v1') -> group( function () {
    // ...
    require __DIR__ . '/Api/v1/RouteAuth.php';
    require __DIR__ . '/Api/v1/RouteBook.php';
    require __DIR__ . '/Api/v1/RouteComment.php';
    // ...
});
// public routes


