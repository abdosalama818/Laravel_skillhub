<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function show($id){

        $data['cat']=Cat::findOrFail($id);
        $data['allCats']=Cat::all();
          // عشان في علاقه بين cast and skiils

        $data['skills']=$data['cat']->skills;

        //skills دي داله موجوده جوا catmodel
          // عشان في علاقه بين cast and skiils



        return view('web.show.cats')->with($data);
    }
}
