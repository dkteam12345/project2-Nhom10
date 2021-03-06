<?php

namespace App\Http\Controllers;

use App\Models\ToolModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ToolController extends Controller
{
    //
    function index(Request $request){
        
        
        $contacts = ToolModel::getAllContact();
       
        return view('master',['contacts'=>$contacts]);

       
        
    }
    function test(Request $request){
        $contacts = ToolModel::getAllContact();
        return view('nhanvien.test',['contacts'=>$contacts]);


        $loaithietbi = ToolModel::getAllloaithietbi();
        return view('test',['loaithietbi'=>$loaithietbi]);


    }
    function createcontact(Request $request){
        $name = $request -> input('name');
        $address = $request -> input('address');
        $phone = $request -> input('phone');
        $active = $request -> input('active');
        $rs = ToolModel::createcontact($name,$address,$phone,$active);
        if($rs == 0){

        }
        else{
            return redirect('test');
        }
    }
    function deletecontact($id){
        $rs = ToolModel::deleteid($id);
        if ($rs == 0){
            return "fail";
        }
        else{
            return redirect('test');
        }
    }
    function editcontact($id){
        $contact = ToolModel::getcontact($id);
        return view('nhanvien.update',['contact'=>$contact]);
    }
    function updatecontact(Request $request,$id){
        $name = $request -> input('name');
        $address = $request -> input('address');
        $phone = $request -> input('phone');
        $active = $request -> input('active');
        $rs = ToolModel::updatecontact($id,$name,$address,$phone,$active);
        if ($rs == 0){
            return "fail";

        }
        else{
            return redirect('test');
        }
    }




    // function index(Request $request){
        
        
    //     $contacts = ToolModel::getAllloaithietbi();
       
    //     return view('master',['loaithietbi'=>$loaithietbi]);
        
    // }
    // function test(Request $request){
    //     $loaithietbi = ToolModel::getAllloaithietbi();
    //     return view('test',['loaithietbi'=>$loaithietbi]);
    // }
        function thietbi(){
            $thietbi = ToolModel::getAllthietbi();
            return view('thietbi.thietbi',['thietbi'=>$thietbi]);
        }
    function createthietbi(Request $request){
        $loai = $request -> input('loai');
       
        $ghichu = $request -> input('ghichu');
        $rs = ToolModel::createthietbi($loai,$ghichu);
        if($rs == 0){
            
            return "fail";
        }
        else{
            return redirect('/thietbi');
        }
    }
    function deletethietbi($id){
        $rs = ToolModel::deletethietbi($id);
        if ($rs == 0){
           
            return "fail";
        }
        else{
           
            return redirect('/thietbi');
        }
    }
    function editthietbi($id){
        $thietbi = ToolModel::getthietbi($id);
        return view('thietbi.updatethietbi',['thietbi'=>$thietbi]);
    }
    function updatethietbi(Request $request,$id){
        $loai = $request -> input('loai');
        
        $ghichu = $request -> input('ghichu');
        $rs = ToolModel::updatethietbi($id,$loai,$ghichu);
        if ($rs == 0){
            return "fail";

        }
        else{
            return redirect('/thietbi');
        }
    }

    function trangthietbi(Request $red){
        $keyword = $red->input('keyword','');
        // $trangthietbi = ToolModel::getalltrangthietbi($keyword);

        // return view('trangthietbi.trangthietbi',['trangthietbi'=>$trangthietbi]);

        $trangthietbi = DB::table('thietbi')
        ->join('loaithietbi','loaithietbi.ID_loai','=','thietbi.ID_loai')->join('phong','phong.ID_phong','=','thietbi.ID_phong')
        ->select('thietbi.ID_tb','phong.ID_phong','loaithietbi.loai','loaithietbi.ID_loai','thietbi.name','thietbi.soluong','thietbi.ngaynhap','thietbi.tinhtrang')
        ->where('name','LIKE','%'.$keyword.'%')
        ->paginate();
        return view('trangthietbi.trangthietbi',['trangthietbi'=>$trangthietbi]);
        
       
    }


    // function trangthietbi(){
    //     $trangthietbi = ToolModel::getalltrangthietbi();
    //     return view('trangthietbi.trangthietbi',['trangthietbi'=>$trangthietbi]);
    // }
    function getallphong(){
        $phong = ToolModel::getallphong();
        return view('phong.phong',['phong'=>$phong]);
    }

    function deletephong($id){
        $rs = ToolModel::deletephong($id);
        if ($rs == 0){
           
            return "fail";
        }
        else{
           
            return redirect('/phong');
        }
    }

    function editphong($id){
        $phong = ToolModel::getphong($id);
        return view('phong.updatephong',['phong'=>$phong]);
    }

    function updatephong(Request $request,$id){
        $tenphong = $request -> input('tenphong');
        $ID_tang = $request -> input('ID_tang');
        $rs = ToolModel::updatephong($id,$tenphong,$ID_tang);
        if ($rs == 0){
            return "fail";

        }
        else{
            return redirect('/phong');
        }
    }


   
    function getalltang() {
        $tang = ToolModel::getalltang();
        return view('tang.tang',['tang'=>$tang]);
    }

    function deletetang($id){
        $rs = ToolModel::deletetang($id);
        if ($rs == 0){
           
            return "fail";
        }
        else{
           
            return redirect('/tang');
        }
    }

    function edittang($id){
        $tang = ToolModel::gettang($id);
        return view('tang.updatetang',['tang'=>$tang]);
    }

    function updatetang(Request $request,$id){
        $ID_nv = $request -> input('ID_nv');
        $rs = ToolModel::updatetang($id,$ID_nv);
        if ($rs == 0){
            return "fail";

        }
        else{
            return redirect('/tang');
        }
    }




    function createtrangthietbi(Request $request){
        $name = $request -> input('name');
        $soluong = $request -> input('soluong');
        $ngaynhap = $request -> input('ngaynhap');
        $tinhtrang = $request -> input('tinhtrang');
        $id_loai = $request -> input('loai');
        
        $id_phong = $request -> input('phong');
        $id_tang = $request -> input('tang');
        $rs = ToolModel::createtrangthietbi($name,$soluong,$ngaynhap,$tinhtrang,$id_loai,$id_phong,$id_tang);
        if ($rs == 0){
            return "fail";
        }else{
        return redirect('/trangthietbi');
        }

    }
   
    function deletetrangthietbi($id){
        $rs = ToolModel::deletetrangthietbi($id);
        if ($rs == 0){
           
            return "fail";
        }
        else{
           
            return redirect('/trangthietbi');
        }
    }

    function edittrangthietbi($id){
        $trangthietbi = ToolModel::gettrangthietbi($id);
       
        $phong = DB::table('phong')->get();
        $loaithietbi = DB::table('loaithietbi')->get();
        return view('trangthietbi.updatetrangthietbi',['trangthietbi'=>$trangthietbi,'phong'=>$phong,'loaithietbi'=>$loaithietbi]);
    }

    function updatetrangthietbi(Request $request,$id){
        $name = $request -> input('name');
        $soluong = $request -> input('soluong');
        $ngaynhap = $request -> input('ngaynhap');
        $tinhtrang = $request -> input('tinhtrang');
        $ID_loai = $request -> input('ID_loai');
        $ID_phong = $request -> input('ID_phong');
        
        
        
        
        $rs = ToolModel::updatetrangthietbi($id,$name,$soluong,$ngaynhap,$tinhtrang,$ID_loai,$ID_phong);
        if ($rs == 0){
            
            return redirect('/404');


        }
        else{
            return redirect('/trangthietbi');
        }
    }
    function chart(){
        $chart = ToolModel::chart();
        return view('chart.chart',['chart'=>$chart]);
    }
    function switchstatus($id){
        $status = DB::table('nhanvien')->where('ID_nv','=',$id)->get()[0];
        $active=$status->active==0?1:0;
        DB::update('UPDATE nhanvien SET active = ? WHERE ID_nv=?',[$active,$id]); 
        return redirect('/test');
    }


}
