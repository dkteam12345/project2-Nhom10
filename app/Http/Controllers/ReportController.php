<?php

namespace App\Http\Controllers;


use App\Models\ReportModel;
use Facade\FlareClient\Report as FlareClientReport;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    function getallbaocao(){
         $baocao = ReportModel::getallbaocao();

         return view('baocaocuanhanvien.baocao',['baocao'=>$baocao]);


    }
    function createbaocao(Request $request){
        $nv = $request -> input('nhanvien');
        $tb = $request -> input('thietbi');
        $date = $request -> input('ngaykiemtra');
        $kk = $request -> input('loaikiemke');

        $rs = ReportModel::createbaocao($nv,$tb,$date,$kk);
        if ($rs == 0){
            return "fail";
        }
        else{
            return redirect('/baocao');
        }

    }
}
