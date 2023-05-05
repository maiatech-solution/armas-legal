@extends('template')
@section('content')

    <div class="container-padrao bg-zinc-800">
        <div id="title">
            <h1>ARMA LEGAL - FASPM</h1>
        </div>
        <div class="inputs">
            <div class="form-group">
                <Label for="arma">Modelo da Arma: </Label>
                <span class="text-orange-600 font-bold"></span>
            </div>
            <div class="form-group">
                <Label for="arma">Valor da Arma: </Label>
                <input type="text" name="arma" id="arma" value="">
            </div>
            <span class="text-orange-600 font-bold">(Máximo 24 vezes)</span>
            <div class="form-group">

                <Label for="tooltip" data-toggle="tooltip" data-placement="top" title="
        / 1 - 20% / 2 a 5 - 30% / 6 a 8 - 40% / 9 a 12 - 50% / 12 em diante - 70% / ">Número de Parcelas: </Label>
                <input type="number" name="quantidade" id="quantidade" value="">

            </div>

            <div class="form-group">
                <Label for="lucro">Porcentagem de lucro: </Label>
                <span id="lucro"></span>
            </div>
            <div class="form-group">
                <Label for="mes">Valor a pagar por mês: </Label>
                <span id="mes"></span>
            </div>
            <div class="form-group">
                <Label for="total" id="totalpago">Total a ser pago: </Label>
                <span id="total"></span>
            </div>
            <div class="botao">
                <button type="button" id="simulacao">
                    Formulário para solicitação de aprovação do Financiamento
                </button>
            </div>
        </div>
    </div>


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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
            flex-direction: column;
            font-family: 'Cormorant Garamond', serif;
        }

        .container-padrao {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        #title {
            width: 100%;
            height: 10%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: aliceblue;
            background-color: rgba(54, 54, 54, 0.747);
        }

        .inputs {
            height: 90%;
            width: 100%;
            background-color: rgb(156, 156, 156);
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;

        }

        .form-group {
            height: 25px;
            justify-content: center;
            align-items: center;
            display: flex;
            overflow: hidden;
            width: 100%;
            gap: 50px;
        }

        .form-group input {
            border-radius: 6px;
            outline: none;
            width: 50px;
            height: 40px;
            border-radius: 15px;
            font-size: 20px;
            border: none;
            padding: 5px;
            font-weight: bold;
            font-family: serif;
            text-align: center;
        }

        .form-group label {
            color: rgb(24, 24, 24);
            font-weight: bolder;
            font-size: 20px;

        }

        .form-group span {
            font-size: 20px;
            font-weight: bold;
            font-family: serif;
        }

        #totalpago {
            text-transform: uppercase;
            color: rgb(3, 88, 3);
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

        footer {
            color: aliceblue;
            margin: 10px;
            font-style: italic;
        }

        @media screen and (min-width: 320px) {
            .container-padrao {
                display: flex;
                width: 100%;
                height: 100vh;
                border: none;
            }

            h1 {
                font-size: 25px;
            }

            .form-group {
                gap: 25px;
            }

            .form-group input {
                font-size: 16px;
                width: 60px;
            }
        }


        @media screen and (min-width: 768px) {
            h1 {
                font-size: 35px;
            }

            #title {
                height: 12%;
            }

            .form-group {
                height: 35px;
            }

            .form-group label {
                font-size: 30px;
            }

            .form-group input {
                width: 100px;
            }

            .form-group span {
                font-size: 25px;
            }
        }

        @media screen and (min-width: 992px) {
            .container-padrao {
                width: 50%;
                height: 500px;
                border: 1px solid white;
            }
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
