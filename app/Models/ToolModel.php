<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ToolModel extends Model
{
    use HasFactory;
    static function getAllContact(){
        return DB::select("SELECT * FROM testing");
    }
    static function createcontact($name,$address){
        return DB::table('testing')->insert([
            'name'=>$name,
            'address'=>$address,
            
        ]);
    }
    static function deleteid($id){
        return DB::delete("DELETE FROM testing WHERE id='$id'");
    }
    static function getcontact($id){
        $contacts = DB::select("SELECT * FROM testing WHERE id='$id'");
        if(count($contacts) == 0) return NULL;
        else return $contacts[0];
    }
    static function updatecontact($id,$name,$address){
        return DB::update("UPDATE testing SET name='$name',address='$address' WHERE id='$id'");
    }
}
