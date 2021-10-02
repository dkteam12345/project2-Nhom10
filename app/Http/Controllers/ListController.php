<?php

namespace App\Http\Controllers;

use App\Models\ListModel;
use Illuminate\Http\Request;

class ListController extends Controller
{
    //
    function danhsach($id){
        $danhsach = ListModel::getdanhsach($id);
        return view('phong.danhsach',['danhsach'=>$danhsach]);
    }
}
