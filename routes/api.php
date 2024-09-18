<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersApiController;
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
Route::get('customers', [CustomersApiController::class, 'index']);
Route::get('customers/{id}', [CustomersApiController::class, 'show']);
Route::post('customers/add', [CustomersApiController::class, 'store']);
Route::put('customers/update/{id}', [CustomersApiController::class, 'update']);
Route::delete('customers/delete/{id}', [CustomersApiController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
