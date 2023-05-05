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
            $pistolaTaurus = Arma::where('fabricante', 'Taurus')
            ->where('tipo', 'Pistola')
            ->get();
            $revolverTaurus = Arma::where('fabricante', 'Taurus')
            ->where('tipo', 'Revolver')
            ->get();
            $longasTaurus = Arma::where('fabricante', 'Taurus')
            ->where('tipo', 'Arma Longa')
            ->get();

            $pistolaCBC = Arma::where('fabricante', 'CBC')
            ->where('tipo', 'Pistola')
            ->get();
            $revolverCBC = Arma::where('fabricante', 'CBC')
            ->where('tipo', 'Revolver')
            ->get();
            $longasCBC = Arma::where('fabricante', 'CBC')
            ->where('tipo', 'Arma Longa')
            ->get();

            $pistolaGlock = Arma::where('fabricante', 'Glock')
            ->where('tipo', 'Pistola')
            ->get();
            $revolverGlock = Arma::where('fabricante', 'Glock')
            ->where('tipo', 'Revolver')
            ->get();
            $longasGlock = Arma::where('fabricante', 'Glock')
            ->where('tipo', 'Arma Longa')
            ->get();



        return view('catalogo', [
            'pistolaTaurus'=> $pistolaTaurus,
            'revolverTaurus'=> $revolverTaurus,
            'longasTaurus'=> $longasTaurus,

            'pistolaCBC'=> $pistolaCBC,
            'revolverCBC'=> $revolverCBC,
            'longasCBC'=> $longasCBC,

            'pistolaGlock'=> $pistolaGlock,
            'revolverGlock'=> $revolverGlock,
            'longasGlock'=> $longasGlock
        ]);

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
