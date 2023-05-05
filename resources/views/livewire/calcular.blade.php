<div>
<div>
    <label for="">Pretendes parcelar de quantas Vezes</label>
    <select name="" id="" wire:model="parcelas">
        <option value="1">à vista</option>
        <option value="4">4x</option>
        <option value="10">10x</option>
        <option value="15">15</option>
        <option value="20">20</option>
        <option value="24">24</option>
    </select>
</div>
@json($parcelas) <br><br>
@json($preco) <br><br>
@json($total)<br><br>
<div>
    <div>
        <button wire:click="calc">Calcular</button>
        @json($total)
        <h1>{{ $total }}</h1>
    </div>
</div>
</div>
