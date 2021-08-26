<?php

namespace App\Http\Controllers;

use App\Models\ToolModel;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    //
    function index(Request $request){
        
        
        $contacts = ToolModel::getAllContact();
       
        return view('test',['contacts'=>$contacts]);
        
    }
    function createcontact(Request $request){
        $name = $request -> input('name');
        $address = $request -> input('address');
        $rs = ToolModel::createcontact($name,$address);
        if($rs == 0){

        }
        else{
            return redirect('/');
        }
    }
    function deletecontact($id){
        $rs = ToolModel::deleteid($id);
        if ($rs == 0){
            return "fail";
        }
        else{
            return redirect('/');
        }
    }
    function editcontact($id){
        $contact = ToolModel::getcontact($id);
        return view('update',['contact'=>$contact]);
    }
    function updatecontact(Request $request,$id){
        $name = $request -> input('name');
        $address = $request -> input('address');
        $rs = ToolModel::updatecontact($id,$name,$address);
        if ($rs == 0){
            return "fail";

        }
        else{
            return redirect('/');
        }
    }
   
}
