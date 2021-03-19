<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('nested', function () {
    return view('nestedlist');
});

// Route::resource('task', [TaskController::class]);

Route::get('task', [TaskController::class, 'index']);
Route::get('getAllTask', [TaskController::class, 'getAllTask']);
Route::post('task', [TaskController::class, 'store']);
Route::delete('task/{task}', [TaskController::class, 'destroy']);
Route::put('task/{id}', [TaskController::class, 'update']);