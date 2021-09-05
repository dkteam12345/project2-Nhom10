<?php

namespace App\Http\Controllers;

use App\Models\ToolModel;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    //
    function index(Request $request){
        
        
        $contacts = ToolModel::getAllContact();
       
        return view('master',['contacts'=>$contacts]);

        $contacts = ToolModel::getAllloaithietbi();
       
        return view('master',['loaithietbi'=>$loaithietbi]);

        
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
        $ten = $request -> input('ten');
        $ghichu = $request -> input('ghichu');
        $rs = ToolModel::createthietbi($loai,$ten,$ghichu);
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
        $ten = $request -> input('ten');
        $ghichu = $request -> input('ghichu');
        $rs = ToolModel::updatethietbi($id,$loai,$ten,$ghichu);
        if ($rs == 0){
            return "fail";

        }
        else{
            return redirect('/thietbi');
        }
    }

    function trangthietbi(Request $red){
        $keyword = $red->input('keyword','');
        $trangthietbi = ToolModel::getalltrangthietbi($keyword);

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
   
    function getalltang() {
        $tang = ToolModel::getalltang();
        return view('tang.tang',['tang'=>$tang]);
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
   
}
