<?php

namespace App\Http\Controllers;


use App\Models\ReportModel;
use App\Models\ToolModel;
use Facade\FlareClient\Report as FlareClientReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReportController extends Controller
{
    //
    function getallbaocao(){
         $baocao = ReportModel::getallbaocao();

         return view('baocaocuanhanvien.baocao',['baocao'=>$baocao]);


    }
    
    function createbaocao(Request $request){
        
        $tb = $request -> input('thietbi');
        $date = $request -> input('ngaykiemtra');
        $kk = $request -> input('loaikiemke');
        $input = Session::get('ss');
        $rs = ReportModel::createbaocao($input->ID_nv,$tb,$date,$kk);
        if ($rs == 0){
            return "fail";
        }
        else{
            return redirect('/baocao');
        }

    }
}