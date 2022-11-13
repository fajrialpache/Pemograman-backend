<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#method get
Route::get('/animals', [AnimalController::class, 'index']);

#method post
Route::post('/animals', [AnimalController::class, 'store']);

#method put
Route::put('/animals/{id}', [AnimalController::class, 'update']);

#method delete
Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);

#get all resource students
#method get
route::get('/students', [StudentController::class, 'index']);

#menambahkan resource student
#method pos
route::post('/students', [StudentController::class, 'store']);

#mendapatkan detail resource student
#method get
route::get('/students/{id}', [StudentController::class]);

#mempebarui resource student
#method put 
route::put('/students/{id}', [StudentController::class, 'upadet']);

#menghapus resource student
#method delete
route::delete('/students/{id}', [StudentController::class, 'destroy']);
