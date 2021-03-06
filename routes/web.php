<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ToolController;
use App\Models\Report;
use App\Models\ToolModel;
use Illuminate\Support\Facades\DB;
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
Route::get('/login',function(){
    return view('loginadmin.login');
});
route::post('/login',[AdminController::class,'login']);
Route::post('/create',[ToolController::class,'createcontact']);
route::get('/delete/{id}',[ToolController::class,'deletecontact']);
route::get('/edit/{id}',[ToolController::class,'editcontact']);
route::post('/edit/{id}',[ToolController::class,'updatecontact']);

route::get('/thietbi',[ToolController::class,'thietbi']);
route::get('/createthietbi',function(){
    return view('thietbi.createthietbi');
});
route::post('/createthietbi',[ToolController::class,'createthietbi']);
route::get('/deletethietbi/{id}',[ToolController::class,'deletethietbi']);
route::get('updatethietbi/{id}',[ToolController::class,'editthietbi']);
route::post('/updatethietbi/{id}',[ToolController::class,'updatethietbi']);

// route::get('/trangthietbi',[ToolController::class,'trangthietbi']);

Route::get('/trangthietbi',[ToolController::class,'trangthietbi']);

route::get('/createtrangthietbi',function(){
    return view('trangthietbi.createtrangthietbi')->with('tang',DB::table('tang')->get())->with('phong',DB::table('phong')->get())->with('thietbi',DB::table('loaithietbi')->get());
    
});
route::post('/createtrangthietbi',[ToolController::class,'createtrangthietbi']);
Route::get('/deletetrangthietbi/{id}',[ToolController::class,'deletetrangthietbi']);
route::get('/updatetrangthietbi/{id}',[ToolController::class,'edittrangthietbi']);
route::post('/updatetrangthietbi/{id}',[ToolController::class,'updatetrangthietbi']);

route::get('/phong',[ToolController::class,'getallphong']);
route::get('/deletephong/{id}',[ToolController::class,'deletephong']);
Route::get('/updatephong/{id}',[ToolController::class,'editphong']);
Route::post('/updatephong/{id}',[ToolController::class,'updatephong']);


Route::get('/tang',[ToolController::class,'getalltang']);
route::get('/deletetang/{id}',[ToolController::class,'deletetang']);
Route::get('/updatetang/{id}',[ToolController::class,'edittang']);
Route::post('/updatetang/{id}',[ToolController::class,'updatetang']);

route::get('/baocao',[ReportController::class,'getallbaocao']);
route::get('/createbaocao',function(){
    return view('baocaocuanhanvien.createbaocao')->with('nhanvien',DB::table('nhanvien')->get())->with('thietbi',DB::table('thietbi')->get());
});
route::post('/createbaocao',[ReportController::class,'createbaocao']);
route::get('/logout',[AdminController::class,'logout']);
route::get('/chart',[ToolController::class,'chart']);
route::get('/dashboard',[AdminController::class,'dashboard']);
route::get('/test/switchstatus/{id}',[ToolController::class,'switchstatus']);
Route::get('/dsds',[AdminController::class,'maintance']);
Route::get('/dsdh',[AdminController::class,'fix']);
Route::get('/dsod',[AdminController::class,'gtg']);
route::get('/404',[AdminController::class,'error']);
route::get('/phongdetail/{id}',[AdminController::class,'detail']);
route::Get('/updatebaocao/{id}',[ReportController::class,'editbaocao']);
route::get('/updatebaocao/{id}',[ReportController::class,'updatebaocao']);
route::get('/danhsach/{id}',[ListController::class,'danhsach']);
