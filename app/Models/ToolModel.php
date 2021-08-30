<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ToolModel extends Model
{
    use HasFactory;
    static function getAllContact(){
        return DB::select("SELECT * FROM nhanvien");


        return DB::select("SELECT * FROM loaithietbi");

    }
    static function createcontact($name,$address,$phone,$active){
        return DB::table('nhanvien')->insert([
            'name'=>$name,
            'address'=>$address,
            'phone'=>$phone,
            'active'=>$active
        ]);

        return DB::table('loaithietbi')->insert([
            'loai'=>$loai,
            'ten'=>$ten,
            'ghichu'=>$ghichu,
            
        ]);


    }
    static function deleteid($id){
        return DB::delete("DELETE FROM nhanvien WHERE ID_nv='$id'");

        return DB::delete("DELETE FROM loaithietbi WHERE ID_loai='$id'");

    }
    static function getcontact($id){
        $contacts = DB::select("SELECT * FROM nhanvien WHERE ID_nv='$id'");
        if(count($contacts) == 0) return NULL;
        else return $contacts[0];

      

    }
    static function updatecontact($id,$name,$address,$phone,$active){
        return DB::update("UPDATE nhanvien SET name='$name',address='$address',phone='$phone',active='$active'WHERE ID_nv='$id'");

      
    }
    static function getallphong(){
        return DB::select("SELECT ID_phong,tenphong,tang.ID_tang FROM phong INNER JOIN tang ON phong.ID_tang = tang.ID_tang");
    }

    static function getalltang(){
        return DB::select("SELECT ID_tang,nhanvien.ID_nv,nhanvien.name FROM tang INNER JOIN nhanvien ON tang.ID_nv =  nhanvien.ID_nv");
    }
 
    static function getalltrangthietbi(){
        return DB::table('thietbi')->join('loaithietbi','loaithietbi.ID_loai','=','thietbi.ID_loai')->join('phong','phong.ID_phong','=','thietbi.ID_phong')->join('tang','tang.ID_tang','=','thietbi.ID_tang')->select('phong.ID_phong','tang.ID_tang','loaithietbi.loai','thietbi.name','thietbi.soluong','thietbi.ngaynhap','thietbi.tinhtrang')->get();
        
    }
    
}
