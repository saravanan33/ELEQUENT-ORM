<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
Route::get('userData/{id}',[StudentController::class,'userData']);
Route::get('details/{id}',[StudentController::class,'details']);
Route::get('studentToParent/{id}',[StudentController::class,'studentToParent']);
Route::get('parentToStudent/{id}',[StudentController::class,'parentToStudent']);