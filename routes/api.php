<?php

use App\Http\Controllers\FlavorController;
use App\Http\Controllers\RegisterController;
use App\Models\Users;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', [UsersController::class, 'login']);
Route::get('/users', [UsersController::class, 'getUsers']);

Route::get('/flavor', [FlavorController::class, 'getFlavor']);
Route::post('/flavor', [FlavorController::class, 'postFlavor']);
Route::delete('/flavor', [FlavorController::class, 'deleteFlavor']);
