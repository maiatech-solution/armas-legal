@extends('template')
@section('content')
    <main class="flex flex-col lg:flex-row lg:h-[100vh] bg-slate-900 text-white">
      <section class=" w-[100%] lg:w-[70vw]  mb-4 lg:mb-0 v-[50vh] flex lg:border-r-2 lg:border-b-0 border-b-2">
        <img src="./imgs/fuzil.jpg" class="bg-cover bg-transparent" alt="">
      </section>
      <section class="items-center flex flex-col p-4 lg:p-0  h-[900px] lg:w-[30vw] w-[100%]  justify-center m-auto">
        <div class="w-[100px]"><img src="./imgs/logo-fas-atual.png" alt=""></div>
        <div class="m-8"><h2>Entre com suas credênciais</h2></div>
        <form action="" class=" w-[100%] flex flex-col gap-4">
          <div class="flex flex-col justify-between items-center">
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" class="w-[70%] rounded-xl text-black">
          </div>
          <div class="flex  flex-col justify-between items-center">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" class="w-[70%] rounded-xl text-black">
          </div>
          <div class="flex  flex-col justify-between items-center">
            <label for="matricula">Matrícula:</label>
            <input type="text" id="matricula" name="matricula" class="w-[70%] rounded-xl text-black">
          </div>
          <div class="flex mt-4 flex-col justify-between items-center">
            <button type="submit" class="font-bold bg-white border w-[70%] text-slate-950 p-4 rounded-xl hover:bg-transparent hover:text-white">
              Entrar
            </button>
          </div>
        </form>
      </section>
    </main>
    @endsection
