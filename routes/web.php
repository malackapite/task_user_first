<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//base routes
Route::get('/api/tasks', [TaskController::class, "index"]);
Route::get('/api/tasks/{id}', [TaskController::class, "show"]);
Route::post('/api/tasks', [TaskController::class, "store"]);
Route::put('/api/tasks/{id}', [TaskController::class, "update"]);
Route::delete('/api/tasks/{id}', [TaskController::class, "destroy"]);
//view routes
Route::get('/task/new', [TaskController::class, "newView"]);
Route::get('/task/list/{id}', [TaskController::class, "editView"]);
Route::get('/task/list', [TaskController::class, "listView"]);

//require __DIR__ . '/auth.php';
