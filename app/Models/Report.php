<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Report extends Model
{
    use HasFactory;

    static function getallbaocao(){
        return DB::table('bienban')->join('nhanvien','nhanvien.ID_nv','=','bienban.ID_nv')->join('thietbi','thietbi.ID_tb','=','bienban.ID_tb')->select('nhanvien.name','nhanvien.ID_nv','thietbi.ID_tb','thietbi.name','bienban.ngaykiemtra','bienban.loaikiemke')->get();
    }
    static function createbaocao($nv,$tb,$date,$kk){
        return DB::table('bienban')->insert([
            'ID_nv'=>$nv,
            'ID_tb'=>$tb,
            'ngaykiemtra'=>$date,
            'loaikiemke'=>$kk
        ]);
    }
}
