@extends('template')
@section('content')
   <h1>Pagina de simulação</h1>
   <div>
        <div><p> A Arma escolhida foi <strong>{{$armas->nome}}</strong>.</p></div>
        <div><p> Valor R$ {{$armas->preco}},00</p></div>
        <div>
            @livewire('calcular', ['preco' => $armas->preco])
        </div>
</div>
@endsection
