<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Arma Legal</title>
</head>
<body class="bg-slate-950 text-white">
    <h1></h1>
    <main class="flex flex-col lg:flex-row h-[100vh]">
      <section class=" w-[100vw] lg:w-[70vw] h-[100vh] flex border-r-2">
        <img src="./imgs/fuzil.jpg" class="bg-cover bg-transparent" alt="">
      </section>
      <section class="items-center flex flex-col lg:w-[30vw] w-[95%] h-[80%] justify-center m-auto">
        <div class="w-[100px]"><img src="./imgs/logo-fas-atual.png" alt=""></div>
        <div class="m-8"><h2>Entre com suas credênciais</h2></div>
        <form action="" class=" w-[100%] flex flex-col gap-4">
          <div class="flex flex-col justify-between items-center">
            <label for="nome">Nome Completo:</label>
            <input type="text" name="nome" class="w-[70%] rounded-xl text-black">
          </div>
          <div class="flex  flex-col justify-between items-center">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" class="w-[70%] rounded-xl text-black">
          </div>
          <div class="flex  flex-col justify-between items-center">
            <label for="matricula">Matrícula:</label>
            <input type="text" name="matricula" class="w-[70%] rounded-xl text-black">
          </div>
          <div class="flex mt-4 flex-col justify-between items-center">
            <button type="submit" class="font-bold bg-white border w-[70%] text-slate-950 p-4 rounded-xl hover:bg-transparent hover:text-white">
              Entrar
            </button>
          </div>
        </form>
      </section>
    </main>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</html>
