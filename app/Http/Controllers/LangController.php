<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function set_lang($lang , Request $request){
        $eccept_lang=['ar','en'];
        if( ! in_array($lang,$eccept_lang)){
            $lang='en';
        }
        $request->session()->put('language',$lang);
       return back();

    }
}
