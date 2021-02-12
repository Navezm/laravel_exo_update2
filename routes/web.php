<?php

use App\Http\Controllers\MemberController;
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

Route::get('/', [MemberController::class,'index']);
Route::get('/create', [MemberController::class,'create']);
Route::get('/editMember/{id}', [MemberController::class,'edit']);
Route::get('/showMember/{id}', [MemberController::class,'show']);
Route::post('/addMember', [MemberController::class,'store']);
Route::post('/deleteMember/{id}', [MemberController::class,'destroy']);
Route::post('/deleteAll', [MemberController::class,'destroyAll']);
Route::post('/updateMember/{id}', [MemberController::class,'update']);