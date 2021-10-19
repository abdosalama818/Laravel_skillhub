<?php

namespace App\Http\Controllers;

use App\Models\state;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function show(){
        return view('web.status');
    }

    public function create(Request $request){

       $status = state::create([
        "status"=>$request->value
       ]);
        return redirect(url("status"));
    }


    public function active(){


     $status=state::select('status','id')->orderBy("id",'desc')->first();



        return view('web.effect',[
            "effect"=>$status
        ]);
    }






















/*
    public function update($id){
        $product=state::select('status')->where('id','=',$id)->first();
        if($product->status =='1'){
            $status= '0';
        }else{
            $status= '1';
        }
    }*/
}
