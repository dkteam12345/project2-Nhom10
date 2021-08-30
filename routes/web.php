<?php

use App\Http\Controllers\ToolController;
use App\Models\ToolModel;
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

Route::get('/',[ToolController::class,'index']);
Route::get('/create',function(){
    return view('create');
});
Route::post('/create',[ToolController::class,'createcontact']);
Route::get('/delete/{id}',[ToolController::class,'deletecontact']);
Route::get('/edit/{id}',[ToolController::class,'editcontact']);
Route::post('/edit/{id}',[ToolController::class,'updatecontact']);

Route::get('/phong',[ToolController::class,'getallphong']);

Route::get('/tang',[ToolController::class,'getalltang']);