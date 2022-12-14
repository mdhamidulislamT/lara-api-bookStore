<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
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



Route::middleware('auth:api')->prefix('v1')->group(function(){

    Route::get('/user', function(Request $request){
        return $request->user();
    });

    /* 
    Route::get('/authors/{author}', [AuthorsController::class, 'show']);  // authors/{author}  =>For one specific author
    Route::get('/authors', [AuthorsController::class, 'index']); // authors/{author}  =>For all Authors
     */
    Route::apiResource('/authors', AuthorsController::class);
    Route::apiResource('/books', BooksController::class);

});

