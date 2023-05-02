<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\lijstController;
use App\Http\Controllers\projectController;
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


Route::get('/home', [projectController::class, 'index'])-> name('home');


Route::get('/project', [projectController::class, 'index']);
Route::get('/project', [projectController::class, 'create']);
Route::post('/project', [projectController::class, 'store']);

Route::get('/category', [categoryController::class, 'index']);
// Route::get('/category', [categoryController::class, 'create']);
Route::post('/category', [categoryController::class, 'store']);


Route::get('/lijst', [lijstController::class, 'index']);
// Route::get('/lijst', [lijstController::class, 'create']);
Route::post('/lijst', [lijstController::class, 'store']);



Route::get('/projectEdit/{project}', [projectController::class, 'getEdit'])->name('projectEdit');
Route::put('/projectEdit/{project}', [projectController::class, 'putEdit'])->name('projectEdit.put');

Route::get('/categoryEdit/{category}', [categoryController::class, 'getEdit'])->name('categoryEdit');
Route::put('/categoryEdit/{category}', [categoryController::class, 'putEdit'])->name('categoryEdit.put');

Route::get('/lijstEdit/{lijst}', [lijstController::class, 'getEdit'])->name('lijstEdit');
Route::put('/lijstEdit/{lijst}', [lijstController::class, 'putEdit'])->name('lijstEdit.put');

