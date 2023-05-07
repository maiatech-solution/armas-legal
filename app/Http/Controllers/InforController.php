<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InforController extends Controller
{

    public function infor(){
        if(session()->has('associado')){
        return view('infor');
    }else{
        return redirect()->route('index');
    }
    }
}
