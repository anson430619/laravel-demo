<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\BDAController;
use App\Http\Controllers\STController;
use App\Http\Controllers\DSController;
use App\Http\Controllers\ClassTestController;
use App\Http\Controllers\VariableController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DumpController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\GetPostController;


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

Route::get('/test',[NewController::class,'testpage']);
Route::get('/demo',[NewController::class,'demopage']);
Route::get('/BDA',[BDAController::class,'subjects']);
Route::get('/DS',[DSController::class,'subjects']);
Route::get('/ST',[STController::class,'subjects']);
Route::get('/bda/class',[BDAController::class,'marks']);
Route::get('/classtest',[ClassTestController::class,'marks']);
Route::get('/name',[VariableController::class,'callname']);
Route::get('/table',[EmployeeController::class,'showtable']);
Route::get('/viewtable',[EmployeeController::class,'viewpage']);
Route::get('/dump',[DumpController::class,'loopdemo']);
Route::get('/loop',[DumpController::class,'arraydemo']);

// RESTful API DEMO
Route::get('/rest-api-post-data',[ApiController::class,'postdata']);
Route::post('/rest-api-post-data', [ApiController::class, 'getdata']);
Route::get('/rest-api-demo', [GetPostController::class, 'restapi']);
Route::post('/rest-api-demo', [GetPostController::class, 'restapi']);
Route::get('/rest-api-request', [GetPostController::class, 'restapirequest']);
Route::post('/rest-api-request', [GetPostController::class, 'restapiresponse']);
Route::get('/rest-api-onereq', [GetPostController::class, 'onerequest']);
Route::post('/rest-api-onereq', [GetPostController::class, 'oneresponse']);
Route::get('/rest-api-validate', [GetPostController::class, 'valrequest']);
Route::post('/rest-api-validate', [GetPostController::class, 'valresponse']);
