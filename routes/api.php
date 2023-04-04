<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserReportController;
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

// without Auth
/* Route::apiResource('/books', BooksController::class); 
Route::apiResource('/user/report', UserReportController::class);  */
// End without Auth

Route::middleware('auth:api')->prefix('v1')->group(function(){

    Route::get('/user', function(Request $request){
        return $request->user();
    });

    Route::apiResource('/authors', AuthorsController::class);
    Route::apiResource('/books', BooksController::class);
    Route::apiResource('/students', StudentController::class);

});

