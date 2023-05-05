<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calcular extends Component
{
    public $total =  "";
    public $parcelas = 1;
    public $preco;

    public function calc(){
        $taxa = 0.70;
        $parc = (int) $this->parcelas;
        $prec = (float) $this->preco;
        $tot = $prec*(1+$taxa)*$parc;
        $this->total = $tot;
    }

    public function render()
    {
       return view('livewire.calcular');
    }
}
