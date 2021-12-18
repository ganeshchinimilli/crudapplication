<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\DB;

class Companies extends Controller
{
    //
    function save(Request $req){
    
        $form=new user;
        $form->name=$req->name;
        
        $form->email=$req->email;
        
        $form->phone=$req->phone;
        
        $form->gender=$req->gender;
        $form->description=$req->description;
        $form->country=$req->country;
        $form->file=$req->file;
        
        $form->state=$req->state;
        
        $form->city=$req->city;
        $form->language=$req->language;
        $form->save();
return redirect('main');
    }
    
    function show(Request $req){
        // $data=DB::table("forms")->get();

        // $result = json_decode($data, true);
    //    $data=user::all();
    $search=$req['search']??"";
    if($search!=""){
$members=user::where('name','LIKE',"%".$search."%")->paginate(2);
    }else{
         $members=user::paginate(2);

    }
 $data=compact('members','search');
            
// $data = htmlspecialchars($data);
    // $newData = json_decode($data);


        // $data= DB::table('users')->simplePaginate(1);
        return view('main')->with($data);
    }
    function from(){
        return view('userview');

}
function showdata($id){
    $data=user::find($id);
    
    return view('edit',['data'=>$data]);
}
function update(Request $req){

$form=user::find($req->id);
$form->name=$req->name;
        
$form->email=$req->email;

$form->phone=$req->phone;

$form->gender=$req->gender;
$form->description=$req->description;
$form->country=$req->country;
$form->file=$req->file;

$form->state=$req->state;

$form->city=$req->city;
$form->language=$req->language;
$form->save();
return redirect('main');

}
function delete($id){
    $delete=user::find($id);
    $delete->delete();
    
return redirect('main');

}
}
