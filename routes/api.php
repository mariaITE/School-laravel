<?php

use App\Http\Controllers\StudentsController;
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


});
Route::post('/store', [StudentsController::class, 'store']);
Route::get('/index', [StudentsController::class, 'index']);
Route::post('/login', [StudentsController::class, 'LoginEmployeeOrSpecialist']);


