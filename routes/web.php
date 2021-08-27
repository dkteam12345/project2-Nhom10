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
route::get('/create',function(){
    return view('create');
});
Route::post('/create',[ToolController::class,'createcontact']);
route::get('/delete/{id}',[ToolController::class,'deletecontact']);
route::get('/edit/{id}',[ToolController::class,'editcontact']);
route::post('/edit/{id}',[ToolController::class,'updatecontact']);
