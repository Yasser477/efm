<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/insert',[UserController::class, 'insert']);

Route::get('/show', [UserController::class, 'show']);

Route::get('/email_vrf', [UserController::class, 'email_vrf']);

Route::get('/show_id/{id}', [UserController::class, 'show_id']);

Route::get('/edit/{id}', [UserController::class, 'edit']);

Route::put('/update/{id}', [UserController::class, 'update']);

Route::put('/state/{id}/{validation}', [UserController::class, 'statu']);


Route::get('/valida_idea', [UserController::class, 'valida_idea']);


Route::post('/deleteIdea/{id}', [UserController::class, 'deleteIdea']);

