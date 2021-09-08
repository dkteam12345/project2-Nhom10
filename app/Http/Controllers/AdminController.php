<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    function login(Request $request){
        $rs = ['gmail'=>$request->gmail,'password'=>$request->password];
        if (Auth::guard('admin')->attempt($rs)){
            return redirect('/');
        }
        else{
            echo "exit";
            exit;
            return redirect()->back();
        }
    }
}
