<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
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

Route::get('/', [WorkController::class,'index'])->name('index');
Route::get('/work/add',[WorkController::class,'add']);
Route::post('work/update',[WorkController::class,'update']);
Route::post('rest/add',[WorkController::class,'rest_add']);
Route::post('rest/update',[WorkController::class,'rest_update']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
