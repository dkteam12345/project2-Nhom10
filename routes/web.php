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
Route::get('/test',[ToolController::class,'test']);
Route::get('/',[ToolController::class,'index']);
route::get('/create',function(){
    return view('nhanvien.create');
});
Route::post('/create',[ToolController::class,'createcontact']);
route::get('/delete/{id}',[ToolController::class,'deletecontact']);
route::get('/edit/{id}',[ToolController::class,'editcontact']);
route::post('/edit/{id}',[ToolController::class,'updatecontact']);

route::get('/thietbi',[ToolController::class,'thietbi']);
route::get('/createthietbi',function(){
    return view('createthietbi');
});
route::post('/createthietbi',[ToolController::class,'createthietbi']);
route::get('/deletethietbi/{id}',[ToolController::class,'deletethietbi']);
route::get('updatethietbi/{id}',[ToolController::class,'editthietbi']);
route::post('/updatethietbi/{id}',[ToolController::class,'updatethietbi']);

route::get('/trangthietbi',[ToolController::class,'trangthietbi']);
route::get('/createtrangthietbi',function(){
    return view('createtrangthietbi');
});
route::post('/createtrangthietbi',[ToolController::class,'createtrangthietbi']);
route::get('/updatetrangthietbi/{id}',[ToolController::class,'edittrangthietbi']);
route::post('/updatetrangthietbi/{id}',[ToolController::class,'updatetrangthietbi']);

route::get('/phong',[ToolController::class,'getallphong']);
Route::get('/tang',[ToolController::class,'getalltang']);

