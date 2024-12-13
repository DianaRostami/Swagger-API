<?php

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
use App\Http\Controllers\ResourceController;

// Route to get all resources (GET /api/resources)
Route::get('/resources', [ResourceController::class, 'index']);

// Route to create a new resource (POST /api/resources)
Route::post('/resources', [ResourceController::class, 'store']);

// Route to get a single resource by ID (GET /api/resources/{id})
Route::get('/resources/{id}', [ResourceController::class, 'show']);

// Route to update a resource (PUT /api/resources/{id})
Route::put('/resources/{id}', [ResourceController::class, 'update']);

// Route to delete a resource (DELETE /api/resources/{id})
Route::delete('/resources/{id}', [ResourceController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
