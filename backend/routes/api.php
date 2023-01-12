<?php

use App\Http\Controllers\Api\PostController as ApiPostController;
use App\Http\Controllers\Auth\LoginUser;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', [ApiPostController::class,'index']);
Route::Post('/logout',[LoginUser::class,'logout']);
Route::Post('/login',[LoginUser::class,'login']);

