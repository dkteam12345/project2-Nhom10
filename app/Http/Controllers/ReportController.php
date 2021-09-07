<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    function getallbaocao(){
         $baocao = Report::getallbaocao();

         return view('baocaocuanhanvien.baocao',['baocao'=>$baocao]);


    }
    function createbaocao(Request $request){
        $nv = $request -> input('nhanvien.name');
        $tb = $request -> input('thietbi.name');
        $date = $request -> input('ngaykiemtra');
        $kk = $request -> input('loaikiemke');

        $rs = Report::createbaocao($nv,$tb,$date,$kk);
        if ($rs == 0){
            return "fail";
        }
        else{
            return redirect('/baocao');
        }

    }
}
