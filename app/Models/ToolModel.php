<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ToolModel extends Model
{
    use HasFactory;
    static function getAllContact(){
        return DB::select("SELECT * FROM nhanvien");




    }
    protected $table = 'nhanvien';
    protected $fillable = ['ID_nv','name','address','phone','active'];
    static function createcontact($name,$address,$phone,$active){
        return DB::table('nhanvien')->insert([
            'name'=>$name,
            'address'=>$address,
            'phone'=>$phone,
            'active'=>$active
        ]);



    }
    static function deleteid($id){
        return DB::delete("DELETE FROM nhanvien WHERE ID_nv='$id'");


    }
    static function getcontact($id){
        $contacts = DB::select("SELECT * FROM nhanvien WHERE ID_nv='$id'");
        if(count($contacts) == 0) return NULL;
        else return $contacts[0];
    }
    static function updatecontact($id,$name,$address,$phone,$active){
        return DB::update("UPDATE nhanvien SET name='$name',address='$address',phone='$phone',active='$active'WHERE ID_nv='$id'");

        
    }

    static function getAllthietbi(){
        return DB::select("SELECT * FROM loaithietbi");
        
    }
    static function createthietbi($loai,$ten,$ghichu){
        return DB::table('loaithietbi')->insert([
            'loai'=>$loai,
            'ten'=>$ten,
            'ghichu'=>$ghichu,
            
        ]);
    }
    static function deletethietbi($id){
        return DB::delete("DELETE FROM loaithietbi WHERE ID_loai='$id'");
    }
    static function getthietbi($id){
        $contacts = DB::select("SELECT * FROM loaithietbi WHERE ID_loai='$id'");
        if(count($contacts) == 0) return NULL;
        else return $contacts[0];
    }
    static function updatethietbi($id,$loai,$ten,$ghichu){
        return DB::update("UPDATE loaithietbi SET loai='$loai',ten='$ten',ghichu='$ghichu' WHERE ID_loai='$id'");
    }
 
    

    // static function getalltrangthietbi(){
    //     return DB::table('thietbi')->join('loaithietbi','loaithietbi.ID_loai','=','thietbi.ID_loai')->join('phong','phong.ID_phong','=','thietbi.ID_phong')->join('tang','tang.ID_tang','=','thietbi.ID_tang')->select('phong.ID_phong','tang.ID_tang','loaithietbi.loai','thietbi.name','thietbi.soluong','thietbi.ngaynhap','thietbi.tinhtrang')->get();
        
    // }
    static function getallphong(){
        return DB::select("SELECT tang.ID_tang,tenphong,ID_phong FROM phong INNER JOIN tang ON phong.ID_tang = tang.ID_tang");
    }

    static function deletephong($id){
        return DB::delete("DELETE FROM phong WHERE ID_phong='$id'");
    }

    static function getphong($id){
        $contacts = DB::select("SELECT * FROM phong WHERE ID_phong='$id'");
        if(count($contacts) == 0) return NULL;
        else return $contacts[0];
    }

    static function updatephong($id,$tenphong,$ID_tang){
        return DB::update("UPDATE phong SET tenphong='$tenphong',ID_tang='$ID_tang' WHERE ID_phong='$id'");
    }




    static function getalltang(){
        return DB::select("SELECT ID_tang,nhanvien.ID_nv,nhanvien.name FROM tang INNER JOIN nhanvien ON tang.ID_nv =  nhanvien.ID_nv");
    }

    static function deletetang($id){
        return DB::delete("DELETE FROM tang WHERE ID_tang='$id'");
    }

    static function gettang($id){
        $contacts = DB::select("SELECT * FROM tang WHERE ID_tang='$id'");
        if(count($contacts) == 0) return NULL;
        else return $contacts[0];
    }

    static function updatetang($id,$ID_nv){
        return DB::update("UPDATE tang SET ID_nv='$ID_nv' WHERE ID_tang='$id'");
    }

    



    static function createtrangthietbi($name,$soluong,$ngaynhap,$tinhtrang,$id_loai,$id_phong,$id_tang){
        return DB::table('thietbi')->insert([
            'name'=>$name,
            'soluong'=>$soluong,
            'ngaynhap'=>$ngaynhap,
            'tinhtrang'=>$tinhtrang,
            'ID_loai'=>$id_loai,
            'ID_phong'=>$id_phong, 
            'ID_tang'=>$id_tang,
            
        ]);
    }

    static function deletetrangthietbi($id){
        return DB::delete("DELETE FROM thietbi WHERE ID_loai='$id'");
    }

    static function gettrangthietbi($id){
        $contacts = DB::select("SELECT * FROM thietbi WHERE ID_tb='$id'");
        if(count($contacts) == 0) return NULL;
        else return $contacts[0];
    }

    static function updatetrangthietbi($id,$name,$soluong,$ngaynhap,$tinhtrang,$ID_loai,$ID_phong,$ID_tang){
        
       return DB::update("UPDATE thietbi SET name='$name',soluong='$soluong',
        ngaynhap='$ngaynhap',
        tinhtrang='$tinhtrang',
        ID_loai='$ID_loai',
        ID_phong='$ID_phong', 
        ID_tang='$ID_tang' WHERE ID_tb='$id'");
    }

}
