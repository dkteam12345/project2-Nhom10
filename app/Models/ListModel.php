<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ListModel extends Model
{
    use HasFactory;
    static function getdanhsach($id){
        return DB::table('phong')->join('thietbi','thietbi.ID_phong','=','phong.ID_phong')->join('loaithietbi','thietbi.ID_loai','=','loaithietbi.ID_loai')->select('thietbi.soluong','loaithietbi.loai','phong.ID_phong')->where('phong.ID_phong','=',$id)->get();
    }
}
