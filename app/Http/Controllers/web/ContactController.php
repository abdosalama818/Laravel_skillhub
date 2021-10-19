<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Massege;
use App\Models\massege2;
use App\Models\Setting;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index(){
        $data['setting']=Setting::select('email','phone')->first();
        return view("web.contact.index")->with($data);
    }

    public function send(Request $request){
        $validators=Validator::make($request->all(),
        [
            'name'=>"string|required|max:255",
            'email'=>"email|required|max:255",
            'subject'=>"string|max:255|nullable",
            'body'=>"string|required|max:255",
        ]
        );
        if($validators->fails()){
            $errors=$validators->errors();
            return Response::json($errors);//Response from class Support\Facades\Response;




        }

        $dataa=['msg'=>'your massege send successfully'];

        massege2::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'body'=>$request->body
        ]);
        return back();
        return Response::json($dataa);
    }

}
