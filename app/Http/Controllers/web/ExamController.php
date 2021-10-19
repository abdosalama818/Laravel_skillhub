<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{

    public function show($id){

        return view('web.exam.show');
    }


    public function show_Question($id){

        return view('web.exam.show-questions');
    }
}
