<?php

use Illuminate\Support\Facades\Route;
//added
use Illuminate\Http\Request;
use App\Http\Controllers\ResourceController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route to get all resources (GET /resources)
Route::get('/resources', [ResourceController::class, 'index']);

// Route to create a new resource (POST /resources)
Route::post('/resources', [ResourceController::class, 'store']);

// Route to get a single resource by ID (GET /resources/{id})
Route::get('/resources/{id}', [ResourceController::class, 'show']);

// Route to update a resource (PUT /resources/{id})
Route::put('/resources/{id}', [ResourceController::class, 'update']);

// Route to delete a resource (DELETE /resources/{id})
Route::delete('/resources/{id}', [ResourceController::class, 'destroy']);
