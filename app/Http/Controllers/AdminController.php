<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    function login(Request $request){
        $rs = ['gmail'=>$request->gmail,'password'=>$request->password];
        $gmail = DB::table('admin')->where('gmail','=',$request->gmail)->get()[0];
        if ($gmail->password == ($request->password)){
            Session::put('ss',$gmail);
            Session::put('mail',$gmail->gmail);
           
            return redirect('/dashboard');
        }
        else{
            
           return redirect()->back(); 
            
        }
    }
    function logout(){
        Session::put('mail',NULL);
        Session::put('ss',NULL);
        return redirect('/login');
    }
    function dashboard(){
        $demtb = DB::select('SELECT COUNT(`ID_hd`) as dem FROM bienban')[0];
        $dembc = DB::select('SELECT COUNT(`ID_hd`) as dem FROM bienban')[0];
        $demnv = DB::select('SELECT COUNT(`ID_nv`) as dem  from nhanvien  WHERE active="1"')[0];
        // $barchart = DB::table('thietbi')->join('phong','phong.ID_phong','=','thietbi.ID_phong')->join('loaithietbi','loaithietbi.ID_loai','=','thietbi.ID_loai')->select('loaithietbi.loai as loai','thietbi.soluong as dem','phong.ID_phong as room')->get();
        $barchart = DB::select('SELECT loaithietbi.loai,SUM(thietbi.soluong) as dem,loaithietbi.ID_loai FROM thietbi JOIN loaithietbi ON loaithietbi.ID_loai = thietbi.ID_loai GROUP BY ID_loai');
        
        $demspondinh = DB::select('SELECT SUM(soluong) as dem FROM thietbi WHERE tinhtrang="1"')[0]; 
        $demspdanghong = DB::select('SELECT SUM(soluong) as dem FROM thietbi WHERE tinhtrang="0"')[0]; 
        $demspdangsua = DB::select('SELECT SUM(soluong) as dem FROM thietbi WHERE tinhtrang="2"')[0]; 
        return view('dashboard.dashboard')->with('barchart',$barchart)->with('demtb',$demtb)->with('dembc',$dembc)->with('demnv',$demnv)->with('demspondinh',$demspondinh)->with('demspdanghong',$demspdanghong)->with('demspdangsua',$demspdangsua);

        
    }
    function fix(){
        $demspdh = DB::select('SELECT thietbi.ID_phong as phong,loaithietbi.loai,SUM(soluong) as dem,thietbi.ID_loai FROM thietbi INNER JOIN loaithietbi ON loaithietbi.ID_loai = thietbi.ID_loai WHERE tinhtrang="0" GROUP BY loaithietbi.ID_loai');
        return view('/dsspdanghong.dsdh')->with('demspdh',$demspdh);
    }
    function maintance(){
        $demspds = DB::select('SELECT thietbi.ID_phong as phong,loaithietbi.loai,SUM(soluong) as dem,thietbi.ID_loai FROM thietbi INNER JOIN loaithietbi ON loaithietbi.ID_loai = thietbi.ID_loai WHERE tinhtrang="2" GROUP BY loaithietbi.ID_loai');
        return view('/dsspdangsua.dsds')->with('demspds',$demspds);
    }
    function gtg(){
        $demspod = DB::select('SELECT thietbi.ID_phong as phong,loaithietbi.loai,SUM(soluong) as dem,thietbi.ID_loai FROM thietbi INNER JOIN loaithietbi ON loaithietbi.ID_loai = thietbi.ID_loai WHERE tinhtrang="1" GROUP BY loaithietbi.ID_loai');
        return view('/dsspondinh.dsod')->with('demspod',$demspod);
    }
    function error(){
        return view('/404.404');
    }
    function count(){
        
        return view('dashboard.dashboard');
    }
    
}
