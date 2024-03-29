<?php

namespace App\Http\Controllers;

use App\Models\Associado;
use Illuminate\Http\Request;
use Iluminate\Support\Facades\Auth;

class AssociadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (session()->has('associado')) {
            return redirect()->route('catalogo');
        } else {

            $request->validate([
                'cpf' => 'required|string|min:10|min:10|max:11',
                'matricula' => 'required|string|min:6|max:8',
                'nome' => 'required|string',
            ]);

            $request->only(['cpf', 'matricula', 'nome']);

            $associado = Associado::where('cpf', $request->cpf)
                ->where('matricula', $request->matricula)
                ->where('nome', $request->nome)
                ->first();

            if ($associado) {
                session()->put('associado', $request->nome);
                session()->put('matricula', $request->matricula);

                return redirect()->route('catalogo');
            } else {
                return redirect()->back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
}
