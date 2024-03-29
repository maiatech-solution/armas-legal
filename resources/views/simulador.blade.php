@extends('template')
@section('content')
    <main class="w-[100%] h-[100vh] flex flex-col">
        <h1 class="text-white text-center mt-4 text-2xl">ARMA LEGAL</h1>
        <div class="bg-zinc-800 flex items-center justify-center border border-white flex-col lg:w-[90%] m-auto">
            <div id="title" class="w-[100%] h-[5em] flex justify-center items-center text-gray-300 flex-col bg-zinc-950">
                <h1 class="text-bold text-2xl">SIMULADOR DE PREÇOS</h1>
                <small class="text-sm">(OBS: Os valores podem variar)</small>
            </div>

            <form action="{{route('autorizacao')}}"class="w-[100%] p-4 bg-zinc-400 flex flex-col justify-center items-center">

                    <div class=" justify-between items-center flex lg:flex-row flex-col w-[90%] overflow-hidden lg:gap-8">
                        <Label class="font-bold text-xl w-[30%] " for="arma">Arma Escolhida: </Label>
                        <input class="outline-none w-[70%] border-none bg-transparent rounded-lg text-xl p-2 font-bold text-center"
                        type="text" value="{{$armas->tipo}} - {{$armas->fabricante}} - {{$armas->nome}} - {{$armas->calibre}}" name="descArma">
                    </div>

                    <div
                        class=" justify-between items-center flex w-[90%] lg:flex-row flex-col overflow-hidden lg:gap-8">
                        <input class="outline-none hidden w-[70%] bg-transparent  rounded-lg text-xl p-2 border-none font-bold text-center"
                            readonly type="number" name="arma" id="armaCalculada"
                            value="" id="armaCalculada">
                        <input class="outline-none hidden w-[70%] bg-transparent  rounded-lg text-xl p-2 border-none font-bold text-center"
                            readonly type="number" name="arma" id="arma"
                            value="{{$armas->preco}}">
                    </div>

                    <div
                        class="justify-between items-center flex w-[90%] lg:flex-row flex-col overflow-hidden lg:gap-8">

                        <Label class="font-bold text-xl w-[30%] " for="tooltip" data-toggle="tooltip" data-placement="top"
                            title="
            / 1 - 20% / 2 a 5 - 30% / 6 a 8 - 40% / 9 a 12 - 50% / 12 em diante - 70% / ">Número
                            de Parcelas: </Label>
                            <div class="w-[70%] flex justify-center">
                                <input class="outline-none rounded-lg w-[10%] text-xl p-2 border-none font-bold text-center" type="number"
                                    name="quantidade" id="quantidade">
                            </div>
                    </div>

                    <div class="w-[90%]">
                        <span class="text-orange-600 font-bold text-left" id="span-infor">(Máximo 24 vezes)</span>
                    </div>

                    <div
                        class="hidden w-[90%] lg:flex-row flex-col overflow-hidden lg:gap-8">
                        <Label class="font-bold text-xl" for="lucro">Taxa Aplicada: </Label>
                        <input class="outline-none w-[70%] bg-transparent  rounded-lg text-xl p-2 border-none font-bold text-center" type="text" name="lucro" id="lucro" readonly>

                    </div>
                    <div class=" justify-between items-center flex w-[90%] lg:flex-row flex-col overflow-hidden lg:gap-8">
                        <Label class="font-bold text-xl" for="mes">Valor a pagar por mês: </Label>
                        <input class="outline-none w-[70%] bg-transparent  rounded-lg text-xl p-2 border-none font-bold text-center" type="text" name="parcela" id="mes" readonly>
                    </div>
                    <div
                        class=" justify-between mb-4 items-center flex w-[90%] lg:flex-row flex-col overflow-hidden lg:gap-8">
                        <Label class="font-bold text-xl" for="total" id="totalpago">Total a ser pago: </Label>
                        <input class="outline-none w-[70%] bg-transparent  rounded-lg text-xl p-2 border-none font-bold text-center" type="text" name="totalArma" id="total" readonly>

                    </div>
                    <div class="flex lg:flex-row flex-col justify-around items-center w-[100%]">

                        <a class="lg:w-[30%] w-[100%] gap-8 text-center font-semibold outline-none hover:no-underline uppercase bg-blue-600 hover:bg-blue-700 border p-4 rounded-md mb-8 border-blue-700 text-white" href="{{ route('catalogo') }}">
                                    <i class="fa-solid fa-rotate-left"></i>
                                    Retornar para o Catálogo
                            </a>

                        <button type="submit" id="simulacao" class=" lg:w-[65%] w-[100%] outline-none font-semibold hover:no-underline uppercase bg-zinc-800 hover:bg-zinc-700 border p-4 rounded-md mb-8 border-zinc-700 text-white">
                            Formulário para solicitação de aprovação do Financiamento
                        </button>
                    </div>
            </form>
        </div>
    </main>
    @include('component.footer')

    <script>
        function simulador() {

            var arma = parseFloat(document.querySelector("input[id=arma]").value);
            console.log('calculada: '+ arma.toFixed(2))
            var armaCalculada = (arma*0.74/100) + arma;
            armaCalculada.toFixed(2);
            console.log('calculada: '+ armaCalculada.toFixed(2))

            document.getElementById('armaCalculada').value = armaCalculada.toFixed(2);
            console.log('calculada: '+ armaCalculada.toFixed(2))

            var quantidade = document.getElementById("quantidade");

            quantidade.addEventListener("change", function() {
                var quantidadeValor = document.getElementById("quantidade").value
                console.log("Quantidade valor: " + quantidadeValor);

                var lucro = document.getElementById("lucro");
                if (quantidadeValor >= 1 && quantidadeValor < 7) {
                    var lucroPercentual = 0.74;
                    document.querySelector("input[id=lucro]").value = `${lucroPercentual} %`;
                    console.log(` lucro percentual: ${lucroPercentual}`);
                }
                if (quantidadeValor >= 7 && quantidadeValor <= 12) {
                    var lucroPercentual = 0.84;
                    document.querySelector("input[id=lucro]").value = `${lucroPercentual} %`;
                    console.log(` lucro percentual: ${lucroPercentual}`);
                }
                if (quantidadeValor >= 13 && quantidadeValor <= 18) {
                    var lucroPercentual = 0.94;
                    document.querySelector("input[id=lucro]").value = `${lucroPercentual} %`;
                    console.log(` lucro percentual: ${lucroPercentual}`);
                }
                if (quantidadeValor >= 19 && quantidadeValor <= 24) {
                    var lucroPercentual = 1.04;
                    document.querySelector("input[id=lucro]").value = `${lucroPercentual} %`;
                    console.log(` lucro percentual: ${lucroPercentual}`);
                }
                if(quantidade > 24) {
                    alert("Parcela incorreta - Parcelamos de 1 em até 24x")
                }

                var totalAPagar = (arma / 100 * lucroPercentual) + arma;
                document.querySelector("input[id=total]").value = `${totalAPagar.toFixed(2).replace(".", ",")}`;
                console.log("Total a pagar" + totalAPagar)

                var mes = totalAPagar / quantidadeValor;
                document.querySelector("input[id=mes]").value = `${mes.toFixed(2).replace(".", ",")}`;
                console.log("valor por mes " + mes);
            });

        }

        function atualizar() {
            var btn = document.querySelector("#simulacao");

            btn.addEventListener("click", function() {
                location.reload();

            });
        }

        simulador();
        atualizar();
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <style>
        #totalpago {
            text-transform: uppercase;
            color: rgb(3, 88, 3);
        }

        #span-infor {
            text-align: start;
            align-items: flex-start;
        }

        #total {
            color: rgb(3, 88, 3);
        }


    </style>
@endsection
