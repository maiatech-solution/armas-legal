<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arma;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->has('associado')){
        $arma = Arma::all();

        return view('catalogo', ['armas'=> $arma]);

        }else{
            return redirect()->route('index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
 }
