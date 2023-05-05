@extends('template')
@section('content')
    <main class="w-[100%] h-[100vh] flex">
        <div class="bg-zinc-800 flex items-center justify-center border border-white flex-col w-[50%] m-auto">
            <div id="title" class="w-[100%] h-[5em] flex justify-center items-center text-gray-300 flex-col bg-zinc-950">
                <h1 class="text-bold text-2xl">SIMULADOR DE PREÇOS</h1>
                <small class="text-sm">(OBS: Como já diz, isso é uma simulação, os preços podem variar)</small>
            </div>
            <div class="w-[100%] h-[25em] p-4 bg-zinc-400 flex flex-col justify-around items-center">
                <div class="h-[10em] justify-between items-center flex w-[50%] overflow-hidden gap-4">
                    <Label class="font-bold text-xl" for="arma">Modelo da Arma: </Label>
                    <span class=" font-bold"></span>
                </div>
                <div class="h-[10em] justify-between items-center flex w-[50%] overflow-hidden gap-4">
                    <Label class="font-bold text-xl" for="arma">Valor da Arma: </Label>
                    <input class="outline-none w-[7em] text-1xl p-2 border-none font-bold text-center" type="number"
                        name="arma" id="arma" value="">
                </div>
                <span class="text-orange-600 font-bold text-left" id="span-infor">(Máximo 24 vezes)</span>
                <div class="h-[10em] justify-between items-center flex w-[50%] overflow-hidden gap-4">

                    <Label class="font-bold text-xl" for="tooltip" data-toggle="tooltip" data-placement="top"
                        title="
        / 1 - 20% / 2 a 5 - 30% / 6 a 8 - 40% / 9 a 12 - 50% / 12 em diante - 70% / ">Número
                        de Parcelas: </Label>
                    <input class="outline-none w-[7em] text-1xl p-2 border-none font-bold text-center" type="number"
                        name="quantidade" id="quantidade" value="">
                </div>

                <div class="h-[10em] justify-between items-center flex w-[50%] overflow-hidden gap-4">
                    <Label class="font-bold text-xl" for="lucro">Porcentagem de lucro: </Label>
                    <span id="lucro" class="font-bold text-2xl"></span>
                </div>
                <div class="h-[10em] justify-between items-center flex w-[50%] overflow-hidden gap-4">
                    <Label class="font-bold text-xl" for="mes">Valor a pagar por mês: </Label>
                    <span id="mes" class="font-bold text-2xl"></span>
                </div>
                <div class="h-[10em] justify-between mb-4 items-center flex w-[50%] overflow-hidden gap-4">
                    <Label class="font-bold text-xl" for="total" id="totalpago">Total a ser pago: </Label>
                    <span id="total" class="font-bold text-2xl"></span>
                </div>
                <div class="botao">
                    <button type="button" id="simulacao">
                        Formulário para solicitação de aprovação do Financiamento
                    </button>
                </div>
            </div>
        </div>
    </main>


    <script>
        function simulador() {

            var arma = document.getElementById("arma");
            var armaValor
            arma.addEventListener("change", function() {
                armaValor = document.getElementById("arma").value
                console.log("arma valor: " + armaValor);
            });

            var quantidade = document.getElementById("quantidade");
            console.log("Quantidade " + quantidade)
            quantidade.addEventListener("change", function() {
                var quantidadeValor = document.getElementById("quantidade").value
                console.log("Quantidade valor: " + quantidadeValor);

                var lucro = document.getElementById("lucro");
                if (quantidadeValor <= 1) {
                    var lucroPercentual = 20;
                    document.querySelector("span[id=lucro]").innerHTML = `${lucroPercentual} %`;
                    console.log(` lucro percentual: ${lucroPercentual}`);
                }
                if (quantidadeValor > 1 && quantidadeValor <= 5) {
                    var lucroPercentual = 30;
                    document.querySelector("span[id=lucro]").innerHTML = `${lucroPercentual} %`;
                    console.log(` lucro percentual: ${lucroPercentual}`);
                }
                if (quantidadeValor > 5 && quantidadeValor <= 8) {
                    var lucroPercentual = 40;
                    document.querySelector("span[id=lucro]").innerHTML = `${lucroPercentual} %`;
                    console.log(` lucro percentual: ${lucroPercentual}`);
                }
                if (quantidadeValor > 8 && quantidadeValor <= 12) {
                    var lucroPercentual = 50;
                    document.querySelector("span[id=lucro]").innerHTML = `${lucroPercentual} %`;
                    console.log(` lucro percentual: ${lucroPercentual}`);
                }
                if (quantidadeValor > 12) {
                    var lucroPercentual = 70;
                    document.querySelector("span[id=lucro]").innerHTML = `${lucroPercentual} %`;
                    console.log(` lucro percentual: ${lucroPercentual}`);
                }

                var totalAPagar = ((parseInt(armaValor) / 100 * lucroPercentual)) + parseInt(armaValor);
                document.querySelector("span[id=total]").innerHTML = `${totalAPagar.toFixed(2).replace(".", ",")}`;
                console.log("Total " + totalAPagar)

                var mes = totalAPagar / quantidadeValor;
                document.querySelector("span[id=mes]").innerHTML = `${mes.toFixed(2).replace(".", ",")}`;
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

        #simulacao {
            width: auto;
            padding: 15px;
            background-color: rgb(24, 24, 24);
            outline: none;
            border: none;
            color: rgb(255, 255, 255);
            border-radius: 6px;
            cursor: pointer;
        }

        #simulacao:hover {
            background-color: rgb(34, 34, 34);
        }


    </style>

    <script>
        function simulador() {

            var arma = document.getElementById("arma");
            var armaValor
            arma.addEventListener("change", function() {
                armaValor = document.getElementById("arma").value
                console.log("arma valor: " + armaValor);
            });

            var quantidade = document.getElementById("quantidade");
            console.log("Quantidade " + quantidade)
            quantidade.addEventListener("change", function() {
                var quantidadeValor = document.getElementById("quantidade").value
                console.log("Quantidade valor: " + quantidadeValor);

                var lucro = document.getElementById("lucro");
                if (quantidadeValor <= 1) {
                    var lucroPercentual = 20;
                    document.querySelector("span[id=lucro]").innerHTML = `${lucroPercentual} %`;
                    console.log(` lucro percentual: ${lucroPercentual}`);
                }
                if (quantidadeValor > 1 && quantidadeValor <= 5) {
                    var lucroPercentual = 30;
                    document.querySelector("span[id=lucro]").innerHTML = `${lucroPercentual} %`;
                    console.log(` lucro percentual: ${lucroPercentual}`);
                }
                if (quantidadeValor > 5 && quantidadeValor <= 8) {
                    var lucroPercentual = 40;
                    document.querySelector("span[id=lucro]").innerHTML = `${lucroPercentual} %`;
                    console.log(` lucro percentual: ${lucroPercentual}`);
                }
                if (quantidadeValor > 8 && quantidadeValor <= 12) {
                    var lucroPercentual = 50;
                    document.querySelector("span[id=lucro]").innerHTML = `${lucroPercentual} %`;
                    console.log(` lucro percentual: ${lucroPercentual}`);
                }
                if (quantidadeValor > 12) {
                    var lucroPercentual = 70;
                    document.querySelector("span[id=lucro]").innerHTML = `${lucroPercentual} %`;
                    console.log(` lucro percentual: ${lucroPercentual}`);
                }

                var totalAPagar = ((parseInt(armaValor) / 100 * lucroPercentual)) + parseInt(armaValor);
                document.querySelector("span[id=total]").innerHTML = `${totalAPagar.toFixed(2).replace(".", ",")}`;
                console.log("Total " + totalAPagar)

                var mes = totalAPagar / quantidadeValor;
                document.querySelector("span[id=mes]").innerHTML = `${mes.toFixed(2).replace(".", ",")}`;
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
@endsection
