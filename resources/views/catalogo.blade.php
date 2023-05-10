@extends('template')
@section('content')
    <main class="flex lg:flex-row flex-col h-[100vh] overflow-auto ">
        <div class="lg:w-[20%] lg:overflow-hidden lg:h-[100vh] h-[50vh]">
            <img src="/Imgs/soldado.jpg" class="lg:h-[100vh]" alt="">
        </div>

        <div class="lg:w-[80%] lg:h-[100vh] justify-start lg:overflow-auto bg-zinc-950">

            <div id="alert-border-4"
                class="flex p-4 mb-4 mt-4 w-[90%] m-auto text-yellow-800 border-t-4 border-yellow-300 bg-yellow-50 dark:text-yellow-300 dark:bg-gray-800 dark:border-yellow-800"
                role="alert">
                <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <div class="ml-3 text-sm font-medium uppercase">
                    Antes de tudo, veja alguns requisitos para obter o Financiamento <a href="{{ route('infor') }}">
                        <button type="button" class="font-semibold underline hover:no-underline uppercase">
                            clicando aqui </button>
                    </a>
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-yellow-300 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-border-4" aria-label="Close">
                    <span class="sr-only">Dismiss</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>


            <div class="w-[70%] m-auto mt-4">

                <div class="max-w-sm bg-white m-auto border border-gray-100 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-5">


                      <h5 class="mb-4 text-2xl border-b-2 font-bold tracking-tight text-center text-amber-500 dark:text-white">
                            BONUS EXCLUSIVO !!!
                        </h5>

                        <div class="flex justify-center mb-4">
                            <img src="../Icons/star.svg" alt="">
                            <img src="../Icons/star.svg" alt="">
                            <img src="../Icons/star.svg" alt="">
                        </div>

                        <p class="mb-3 text-center font-normal text-gray-700 dark:text-gray-400">Na compra de qualquer <strong>arma curta</strong>, você ganha <strong>COLDRE + 1 BLISTER DE MUNIÇÃO</strong>.</p>

                    </div>
                </div>
            </div>


            <h1 class="text-white text-center text-4xl m-8">Nossos Modelos</h1>


            <!-- TAURUS------------------- -->
            <div id="accordion-collapse" data-accordion="collapse" class="w-[90%] m-auto mb-8">
                <h2 id="accordion-collapse-heading-1" class="border-b-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0  border-gray-900  focus:ring-4 bg-gray-900 focus:ring-gray-200 hover:bg-gray-600"
                        data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                        aria-controls="accordion-collapse-body-1">
                        <span class="text-white">TAURUS
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0 text-white" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"> </path>
                            </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden bg-zinc-900"
                    aria-labelledby="accordion-collapse-heading-1" class="">
                    <!-- Pistolas ---->
                    <div class=" border-gray-800 w-[90%] m-auto pb-8 rounded-xl flex flex-col flex-wrap mb-8">
                        <h2 class="text-center m-4 text-2xl text-white">Pistolas</h2>

                        <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-8 m-auto">

                            @foreach ($pistolaTaurus as $pistolaT)
                                <!-- Card da arma -->
                                <div
                                    class="border w-[17em] row-span-1 h-[28em] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                    <!-- Img da arma -->
                                    <div class="mb-4 w-[15em]">
                                        <img class="rounded-md" src="{{$pistolaT->img1}}" alt="pistola taurus">
                                    </div>
                                    <!-- Corpo do card -->
                                    <div class="text-center flex flex-col text-white gap-2">
                                        <p>PT {{ $pistolaT->nome }}</p>
                                        <span>Calibre: {{ $pistolaT->calibre }}</span>
                                        <span>Capacidade de tiro {{ $pistolaT->capacidade_tiro }}</span>

                                        <!-- Botão de detalhe -->
                                        <a href="{{route('detalhe',['id'=>$pistolaT->id])}}"><button
                                            class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button">
                                            Mais detalhes
                                        </button> </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Revólveres ---->
                    <div class=" border-gray-800 w-[90%] m-auto pb-8 rounded-xl flex flex-col mb-8">
                        <h2 class="text-center m-4 text-2xl text-white">Revólveres</h2>
                        <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-8 m-auto">
                            @foreach ($revolverTaurus as $revolverT)
                                <!-- Card da arma -->
                                <div
                                    class="border w-[17em] row-span-1 h-[28em] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                    <!-- Img da arma -->
                                    <div class="mb-4 w-[15em]">
                                        <img class="rounded-md" src="{{$revolverT->img1}}" alt="pistola taurus">
                                    </div>
                                    <!-- Corpo do card -->
                                    <div class="text-center flex flex-col text-white gap-2">
                                        <p>PT {{ $revolverT->nome }}</p>
                                        <span>Calibre: {{ $revolverT->calibre }}</span>
                                        <span>Capacidade de tiro {{ $revolverT->capacidade_tiro }}</span>

                                         <!-- Botão de detalhe -->
                                         <a href="{{route('detalhe',['id'=>$revolverT->id])}}"><button
                                            class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button">
                                            Mais detalhes
                                        </button> </a>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Armas Longas ---->
                    <div class=" border-gray-800 w-[90%] m-auto pb-8 rounded-xl flex flex-col mb-8">
                        <h2 class="text-center m-4 text-2xl text-white">Armas Longas</h2>
                        <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-8 m-auto">
                            @foreach ($longasTaurus as $longasT)
                                <!-- Card da arma -->
                                <div
                                    class="border w-[17em] row-span-1 h-[28em] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                    <!-- Img da arma -->
                                    <div class="mb-4 w-[15em]">
                                        <img class="rounded-md" src="{{$longasT->img1}}" alt="pistola taurus">
                                    </div>
                                    <!-- Corpo do card -->
                                    <div class="text-center flex flex-col text-white gap-2">
                                        <p>PT {{ $longasT->nome }}</p>
                                        <span>Calibre: {{ $longasT->calibre }}</span>
                                        <span>Capacidade de tiro {{ $longasT->capacidade_tiro }}</span>

                                         <!-- Botão de detalhe -->
                                         <a href="{{route('detalhe',['id'=>$longasT->id])}}"><button
                                            class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button">
                                            Mais detalhes
                                        </button> </a>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- CBC------------------- -->
            <div id="accordion-collapse" data-accordion="collapse" class="w-[90%] m-auto mb-8">
                <h2 id="accordion-collapse-heading-2" class="border-b-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0  border-gray-900  focus:ring-4 bg-gray-900 focus:ring-gray-200 hover:bg-gray-600"
                        data-accordion-target="#accordion-collapse-body-2" aria-expanded="true"
                        aria-controls="accordion-collapse-body-2">
                        <span class="text-white">CBC
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0 text-white" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"> </path>
                            </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden bg-zinc-900"
                    aria-labelledby="accordion-collapse-heading-2" class="">

                    <!-- Pistolas ---->
                    <div class=" border-gray-800 w-[90%] m-auto pb-8 rounded-xl flex flex-col mb-8">
                        <h2 class="text-center m-4 text-2xl text-white">Pistolas</h2>
                        <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-8 m-auto">
                            @foreach ($pistolaCBC as $pistolaC)
                                <!-- Card da arma -->
                                <div
                                    class="border w-[17em] row-span-1 h-[28em] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                    <!-- Img da arma -->
                                    <div class="mb-4 w-[15em]">
                                        <img class="rounded-md" src="{{$pistolaC->img1}}" alt="pistola taurus">
                                    </div>
                                    <!-- Corpo do card -->
                                    <div class="text-center flex flex-col text-white gap-2">
                                        <p>PT {{ $pistolaC->nome }}</p>
                                        <span>Calibre: {{ $pistolaC->calibre }}</span>
                                        <span>Capacidade de tiro {{ $pistolaC->capacidade_tiro }}</span>

                                         <!-- Botão de detalhe -->
                                         <a href="{{route('detalhe',['id'=>$pistolaC->id])}}"><button
                                            class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button">
                                            Mais detalhes
                                        </button> </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Revólveres ---->
                    <div class=" border-gray-800 w-[90%] m-auto pb-8 rounded-xl flex flex-col mb-8">
                        <h2 class="text-center m-4 text-2xl text-white">Revólveres</h2>
                        <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-8 m-auto">
                            @foreach ($revolverCBC as $revolverC)
                                <!-- Card da arma -->
                                <div
                                    class="border w-[17em] row-span-1 h-[28em] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                    <!-- Img da arma -->
                                    <div class="mb-4 w-[15em]">
                                        <img class="rounded-md" src="{{$revolverC->img1}}" alt="pistola taurus">
                                    </div>
                                    <!-- Corpo do card -->
                                    <div class="text-center flex flex-col text-white gap-2">
                                        <p>PT {{ $revolverC->nome }}</p>
                                        <span>Calibre: {{ $revolverC->calibre }}</span>
                                        <span>Capacidade de tiro {{ $revolverC->capacidade_tiro }}</span>

                                         <!-- Botão de detalhe -->
                                         <a href="{{route('detalhe',['id'=>$revolverC->id])}}"><button
                                            class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button">
                                            Mais detalhes
                                        </button> </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Armas Longas ---->
                    <div class=" border-gray-800 w-[90%] m-auto pb-8 rounded-xl flex flex-col mb-8">
                        <h2 class="text-center m-4 text-2xl text-white">Armas Longas</h2>
                        <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-8 m-auto">
                            @foreach ($longasCBC as $longasC)
                                <!-- Card da arma -->
                                <div
                                    class="border w-[17em] row-span-1 h-[28em] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                    <!-- Img da arma -->
                                    <div class="mb-4 w-[15em]">
                                        <img class="rounded-md" src="{{$longasC->img1}}" alt="pistola taurus">
                                    </div>
                                    <!-- Corpo do card -->
                                    <div class="text-center flex flex-col text-white gap-2">
                                        <p>PT {{ $longasC->nome }}</p>
                                        <span>Calibre: {{ $longasC->calibre }}</span>
                                        <span>Capacidade de tiro {{ $longasC->capacidade_tiro }}</span>

                                         <!-- Botão de detalhe -->
                                         <a href="{{route('detalhe',['id'=>$longasC->id])}}"><button
                                            class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button">
                                            Mais detalhes
                                        </button> </a>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- GLOCK------------------- -->
            <div id="accordion-collapse" data-accordion="collapse" class="w-[90%] m-auto mb-8">
                <h2 id="accordion-collapse-heading-3" class="border-b-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0  border-gray-900  focus:ring-4 bg-gray-900 focus:ring-gray-200 hover:bg-gray-600"
                        data-accordion-target="#accordion-collapse-body-3" aria-expanded="true"
                        aria-controls="accordion-collapse-body-3">
                        <span class="text-white">GLOCK
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0 text-white" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"> </path>
                            </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden bg-zinc-900"
                    aria-labelledby="accordion-collapse-heading-3" class="">

                    <!-- Pistolas ---->
                    <div class=" border-gray-800 w-[90%] m-auto pb-8 rounded-xl flex flex-col mb-8">
                        <h2 class="text-center m-4 text-2xl text-white">Pistolas</h2>
                        <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-8 m-auto">
                            @foreach ($pistolaGlock as $pistolaG)
                                <!-- Card da arma -->
                                <div
                                    class="border w-[17em] row-span-1 h-[28em] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                    <!-- Img da arma -->
                                    <div class="mb-4 w-[15em]">
                                        <img class="rounded-md" src="{{$pistolaG->img1}}" alt="pistola taurus">
                                    </div>
                                    <!-- Corpo do card -->
                                    <div class="text-center flex flex-col text-white gap-2">
                                        <p>PT {{ $pistolaG->nome }}</p>
                                        <span>Calibre: {{ $pistolaG->calibre }}</span>
                                        <span>Capacidade de tiro {{ $pistolaG->capacidade_tiro }}</span>

                                         <!-- Botão de detalhe -->
                                         <a href="{{route('detalhe',['id'=>$pistolaG->id])}}"><button
                                            class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button">
                                            Mais detalhes
                                        </button> </a>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Revólveres ---->
                    <div class=" border-gray-800 w-[90%] m-auto pb-8 rounded-xl flex flex-col mb-8">
                        <h2 class="text-center m-4 text-2xl text-white">Revólveres</h2>
                        <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-8 m-auto">
                            @foreach ($revolverGlock as $revolverG)
                                <!-- Card da arma -->
                                <div
                                    class="border w-[17em] row-span-1 h-[28em] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                    <!-- Img da arma -->
                                    <div class="mb-4 w-[15em]">
                                        <img class="rounded-md" src="{{$revolverG->img1}}" alt="pistola taurus">
                                    </div>
                                    <!-- Corpo do card -->
                                    <div class="text-center flex flex-col text-white gap-2">
                                        <p>PT {{ $revolverG->nome }}</p>
                                        <span>Calibre: {{ $revolverG->calibre }}</span>
                                        <span>Capacidade de tiro {{ $revolverG->capacidade_tiro }}</span>

                                         <!-- Botão de detalhe -->
                                         <a href="{{route('detalhe',['id'=>$revolverG->id])}}"><button
                                            class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button">
                                            Mais detalhes
                                        </button> </a>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Armas Longas ---->
                    <div class=" border-gray-800 w-[90%] m-auto pb-8 rounded-xl flex flex-col mb-8">
                        <h2 class="text-center m-4 text-2xl text-white">Armas Longas</h2>
                        <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-8 m-auto">
                            @foreach ($longasGlock as $longasG)
                                <!-- Card da arma -->
                                <div
                                    class="border w-[17em] row-span-1 h-[28em] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                    <!-- Img da arma -->
                                    <div class="mb-4 w-[15em]">
                                        <img class="rounded-md" src="{{$longasG->img1}}" alt="arma longa">
                                    </div>
                                    <!-- Corpo do card -->
                                    <div class="text-center flex flex-col text-white gap-2">
                                        <p>PT {{ $longasG->nome }}</p>
                                        <span>Calibre: {{ $longasG->calibre }}</span>
                                        <span>Capacidade de tiro {{ $longasG->capacidade_tiro }}</span>

                                         <!-- Botão de detalhe -->
                                         <a href="{{route('detalhe',['id'=>$longasG->id])}}"><button
                                            class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button">
                                            Mais detalhes
                                        </button> </a>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
