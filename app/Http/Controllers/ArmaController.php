<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arma;

class ArmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $arma = Arma::find($id);
        return view('detalhesArma', ['armas'=> $arma]);
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
