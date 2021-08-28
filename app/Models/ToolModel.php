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
    }
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
}
