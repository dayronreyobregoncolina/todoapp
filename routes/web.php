<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', [PageController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');


Route::resources([
    'tasks' => TaskController::class,
    'states' => StatusController::class,
]);
Route::get('tasks/{id}/destroy',[TaskController::class,'destroy'])->name('tasks.destroy');
Route::get('tasks/{id}/restore',[TaskController::class,'restore'])->name('tasks.restore');
Route::get('tasks/{id}/destroy/force',[TaskController::class,'force_destroy'])->name('tasks.destroy.force');

require __DIR__ . '/auth.php';
