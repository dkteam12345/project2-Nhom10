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
            Session::get('ss');
            return redirect('/test');
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
}
