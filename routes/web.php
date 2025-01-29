<?php

use App\Http\Controllers\UserInfoController;
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

Route::post('/user',[UserInfoController::class,'user']);
Route::get('/userview',[UserInfoController::class,'userview']);
Route::get('/edituser/{id}',[UserInfoController::class,'edituser']);

Route::post('/upadte', [UserInfoController::class, 'updateuser']);

Route::get('/deleteuser/{id}', [UserInfoController::class, 'deleteuser']);

// Route::get('/user', [UserController::class, 'index']);


