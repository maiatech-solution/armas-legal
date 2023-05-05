@extends('template')
@section('content')
    <main class="flex lg:flex-row flex-col h-[100vh] ">
        <div class="lg:w-[20%] lg:overflow-hidden lg:h-[100vh]">
            <img src="/Imgs/soldado.jpg" class="h-[100vh]" alt="">
        </div>

        <div class="lg:w-[80%] lg:h-[100vh] justify-start lg:overflow-auto bg-zinc-950">
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
                            @foreach ($armas as $arma)
                            <!-- Card da arma -->
                            <div
                                class="border w-[17em] row-span-1 h-[28em] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                <!-- Img da arma -->
                                <div class="mb-4 w-[15em]">
                                    <img class="rounded-md"
                                        src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-2.jpg"
                                        alt="pistola taurus">
                                </div>
                                <!-- Corpo do card -->
                                <div class="text-center flex flex-col text-white gap-2">
                                    <p>PT {{$arma->nome}}</p>
                                    <span>Calibre: {{$arma->calibre}}</span>
                                    <span>Capacidade de tiro {{$arma->capacidade_tiro}}</span>

                                    <!-- Modal toggle -->
                                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                        class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Mais detalhes
                                    </button>

                                    <!-- Main modal -->
                                    <div id="defaultModal" tabindex="-1" aria-hidden="true"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-2rem)] lg:max-h-full">
                                        <div class="relative m-auto  p-4">
                                            <!-- Modal content -->
                                            <div class="relative  bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal body -->
                                                <div class="p-6 rounded-t space-y-6">

                                                    <div id="default-carousel" class="lg:block hidden relative w-full"
                                                        data-carousel="slide">
                                                        <!-- Carousel wrapper -->
                                                        <div class="relative  w-full overflow-hidden rounded-lg lg:h-96">
                                                            <!-- Item 1 -->
                                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                                <img src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-1.jpg"
                                                                    class="absolute w-[20em] block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                                                    alt="...">
                                                            </div>

                                                            <!-- Item 2 -->
                                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                                <img src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-3.jpg"
                                                                    class="absolute w-[20em] block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                                                    alt="...">
                                                            </div>
                                                            <!-- Item 3 -->
                                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                                <img src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-4.jpg"
                                                                    class="absolute w-[20em] block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                                                    alt="...">
                                                            </div>
                                                        </div>
                                                        <!-- Slider indicators -->
                                                        <div
                                                            class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 bg-black p-4 rounded-lg">
                                                            <button type="button" class="w-3 h-3 rounded-full"
                                                                aria-current="true" aria-label="Slide 1"
                                                                data-carousel-slide-to="0"></button>
                                                            <button type="button" class="w-3 h-3 rounded-full"
                                                                aria-current="false" aria-label="Slide 2"
                                                                data-carousel-slide-to="1"></button>
                                                            <button type="button" class="w-3 h-3 rounded-full"
                                                                aria-current="false" aria-label="Slide 3"
                                                                data-carousel-slide-to="2"></button>
                                                        </div>
                                                        <!-- Slider controls -->
                                                        <button type="button"
                                                            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                                            data-carousel-prev>
                                                            <span
                                                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                                <svg aria-hidden="true"
                                                                    class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                                                    fill="none" stroke="currentColor"
                                                                    viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                                </svg>
                                                                <span class="sr-only">Previous</span>
                                                            </span>
                                                        </button>
                                                        <button type="button"
                                                            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                                            data-carousel-next>
                                                            <span
                                                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                                <svg aria-hidden="true"
                                                                    class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                                                    fill="none" stroke="currentColor"
                                                                    viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                                </svg>
                                                                <span class="sr-only">Next</span>
                                                            </span>
                                                        </button>
                                                    </div>

                                                    <div class="flex lg:flex-row flex-col gap-4 justify-center">
                                                        <div>
                                                            <H3 class="text-black">DADOS TÉCNICOS</H3>
                                                            <table
                                                                class=" m-auto text-sm text-white bg-gray-800 text-left">


                                                                <tr class=" text-center">
                                                                    <th scope="row" class="px-6 py-3 border">DESCRIÇÃO
                                                                    </th>
                                                                    <th scope="row" class="px-6 py-3 border">DETALHE
                                                                    </th>

                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">CALIBRE
                                                                        </th>
                                                                    <td scope="row" class="px-6 py-4 border">{{$arma->calibre}}
                                                                    </td>
                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">ACABAMENTO</th>
                                                                    <td scope="row" class="px-6 py-4 border">{{$arma->acabamento}}
                                                                    </td>
                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">CAPACIDADE DE TIRO</th>
                                                                    <td scope="row" class="px-6 py-4 border">{{$arma->capacidade_tiro}}
                                                                </td>
                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">SIST. DE FUNCIONAMENTO</th>
                                                                    <td scope="row" class="px-6 py-4 border">{{$arma->sistema_funcionamento}}
                                                                        </td>
                                                                </tr>
                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">RAIAS/SENTIDO</th>
                                                                    <td scope="row" class="px-6 py-4 border">{{$arma->qtd_raias}} / {{$arma->sentido_raias}}
                                                                        </td>
                                                                </tr>
                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">QTD CANO / COMPRIMENTO</th>
                                                                    <td scope="row" class="px-6 py-4 border">{{$arma->qtd_cano}} / {{$arma->comprimento_cano}}
                                                                        </td>
                                                                </tr>

                                                            </table>
                                                        </div>

                                                        <div>
                                                            <H3 class="text-black">INFORMAÇÕES</H3>
                                                            <table
                                                                class=" m-auto text-sm text-white bg-gray-800 text-left">


                                                                <tr class=" text-center">
                                                                    <th scope="row" class="px-6 py-3 border">DESCRIÇÃO
                                                                    </th>
                                                                    <th scope="row" class="px-6 py-3 border">DETALHE
                                                                    </th>

                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">PAÍS DE FABRICAÇÃO
                                                                        </th>
                                                                    <td scope="row" class="px-6 py-4 border">{{$arma->pais_fabricacao}}
                                                                    </td>
                                                                </tr>
                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">ESPÉCIE
                                                                        </th>
                                                                    <td scope="row" class="px-6 py-4 border">{{$arma->tipo}}
                                                                    </td>
                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">MARCA</th>
                                                                    <td scope="row" class="px-6 py-4 border">{{$arma->fabricante}}
                                                                    </td>
                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">PREÇO À VISTA</th>
                                                                    <td scope="row" class="px-6 py-4 border"> R$ {{$arma->preco}},00
                                                                    </td>
                                                                </tr>


                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div
                                                    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 w-full">
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-white w-[30%] bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        Fechar
                                                    </button>

                                                    <a class="text-white w-[100%] bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5" href="{{route('simulador',  ['id'=>$arma->id])}}" target="_blank"><button type="button">Simular Financiamento </button></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>



                    <!-- Revólveres ---->
                    <div class=" border-gray-800 w-[90%] m-auto pb-8 rounded-xl flex flex-col mb-8">
                        <h2 class="text-center m-4 text-2xl text-white">Revólveres</h2>
                        <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-8 m-auto">
                            <div
                                class="border w-[17em] row-span-1 h-[28em] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                <div class="mb-4 w-[15em]">
                                    <img class="rounded-md"
                                        src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-2.jpg"
                                        alt="pistola taurus">
                                </div>
                                <div class="text-center flex flex-col text-white gap-2">
                                    <p>TS9C GRAPHENE - 9MM</p>
                                    <span>Calibre: 9mm (9x19)</span>
                                    <span>Capacidade: 13+1 e 17+1</span>

                                    <!-- Modal toggle -->
                                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                        class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Mais detalhes
                                    </button>

                                    <!-- Main modal -->
                                    <div id="defaultModal" tabindex="-1" aria-hidden="true"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-2xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Terms of Service
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="defaultModal">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        With less than a month to go before the European Union enacts new
                                                        consumer privacy
                                                        laws for its citizens, companies around the world are updating their
                                                        terms of
                                                        service agreements to comply.
                                                    </p>
                                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        The European Union’s General Data Protection Regulation (G.D.P.R.)
                                                        goes into effect
                                                        on May 25 and is meant to ensure a common set of data rights in the
                                                        European Union.
                                                        It requires organizations to notify users as soon as possible of
                                                        high-risk data
                                                        breaches that could personally affect them.
                                                    </p>
                                                </div>
                                                <!-- Modal footer -->
                                                <div
                                                    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                                        accept</button>
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Armas Longas ---->
                    <div class=" border-gray-800 w-[90%] m-auto pb-8 rounded-xl flex flex-col mb-8">
                        <h2 class="text-center m-4 text-2xl text-white">Armas Longas</h2>
                        <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-8 m-auto">
                            <div
                                class="border w-[17em] row-span-1 h-[28em] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                <div class="mb-4 w-[15em]">
                                    <img class="rounded-md"
                                        src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-2.jpg"
                                        alt="pistola taurus">
                                </div>
                                <div class="text-center flex flex-col text-white gap-2">
                                    <p>TS9C GRAPHENE - 9MM</p>
                                    <span>Calibre: 9mm (9x19)</span>
                                    <span>Capacidade: 13+1 e 17+1</span>

                                    <!-- Modal toggle -->
                                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                        class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Mais detalhes
                                    </button>

                                    <!-- Main modal -->
                                    <div id="defaultModal" tabindex="-1" aria-hidden="true"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-2xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Terms of Service
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="defaultModal">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        With less than a month to go before the European Union enacts new
                                                        consumer privacy
                                                        laws for its citizens, companies around the world are updating their
                                                        terms of
                                                        service agreements to comply.
                                                    </p>
                                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        The European Union’s General Data Protection Regulation (G.D.P.R.)
                                                        goes into effect
                                                        on May 25 and is meant to ensure a common set of data rights in the
                                                        European Union.
                                                        It requires organizations to notify users as soon as possible of
                                                        high-risk data
                                                        breaches that could personally affect them.
                                                    </p>
                                                </div>
                                                <!-- Modal footer -->
                                                <div
                                                    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                                        accept</button>
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
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
                            <div
                                class="border w-[17em] row-span-1 h-[28em] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                <div class="mb-4 w-[15em]">
                                    <img class="rounded-md"
                                        src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-2.jpg"
                                        alt="pistola taurus">
                                </div>
                                <div class="text-center flex flex-col text-white gap-2">
                                    <p>TS9C GRAPHENE - 9MM</p>
                                    <span>Calibre: 9mm (9x19)</span>
                                    <span>Capacidade: 13+1 e 17+1</span>

                                    <!-- Modal toggle -->
                                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                        class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Mais detalhes
                                    </button>

                                    <!-- Main modal -->
                                    <div id="defaultModal" tabindex="-1" aria-hidden="true"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-[50em]">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        DETALHES
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="defaultModal">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">

                                                    <div id="default-carousel" class="relative w-full"
                                                        data-carousel="slide">
                                                        <!-- Carousel wrapper -->
                                                        <div class="relative w-full overflow-hidden rounded-lg md:h-96">
                                                            <!-- Item 1 -->
                                                            <div class="hidden duration-700 ease-in-out border"
                                                                data-carousel-item>
                                                                <img src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-1.jpg"
                                                                    class="absolute w-[20em] block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                                                    alt="...">
                                                            </div>

                                                            <!-- Item 2 -->
                                                            <div class="hidden duration-700 ease-in-out"
                                                                data-carousel-item>
                                                                <img src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-3.jpg"
                                                                    class="absolute w-[20em] block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                                                    alt="...">
                                                            </div>
                                                            <!-- Item 3 -->
                                                            <div class="hidden duration-700 ease-in-out"
                                                                data-carousel-item>
                                                                <img src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-4.jpg"
                                                                    class="absolute w-[20em] block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                                                    alt="...">
                                                            </div>
                                                        </div>
                                                        <!-- Slider indicators -->
                                                        <div
                                                            class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 bg-black p-4 rounded-lg">
                                                            <button type="button" class="w-3 h-3 rounded-full"
                                                                aria-current="true" aria-label="Slide 1"
                                                                data-carousel-slide-to="0"></button>
                                                            <button type="button" class="w-3 h-3 rounded-full"
                                                                aria-current="false" aria-label="Slide 2"
                                                                data-carousel-slide-to="1"></button>
                                                            <button type="button" class="w-3 h-3 rounded-full"
                                                                aria-current="false" aria-label="Slide 3"
                                                                data-carousel-slide-to="2"></button>
                                                        </div>
                                                        <!-- Slider controls -->
                                                        <button type="button"
                                                            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                                            data-carousel-prev>
                                                            <span
                                                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                                <svg aria-hidden="true"
                                                                    class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                                                    fill="none" stroke="currentColor"
                                                                    viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                                </svg>
                                                                <span class="sr-only">Previous</span>
                                                            </span>
                                                        </button>
                                                        <button type="button"
                                                            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                                            data-carousel-next>
                                                            <span
                                                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                                <svg aria-hidden="true"
                                                                    class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                                                    fill="none" stroke="currentColor"
                                                                    viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                                </svg>
                                                                <span class="sr-only">Next</span>
                                                            </span>
                                                        </button>
                                                    </div>

                                                    <div class="flex gap-4 justify-center">
                                                        <div>
                                                            <H3 class="text-black">DADOS TÉCNICOS</H3>
                                                            <table
                                                                class=" m-auto text-sm text-white bg-gray-800 text-left">


                                                                <tr class=" text-center">
                                                                    <th scope="row" class="px-6 py-3 border">DESCRIÇÃO
                                                                    </th>
                                                                    <th scope="row" class="px-6 py-3 border">DETALHE
                                                                    </th>

                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">CALIBRE
                                                                        </th>
                                                                    <td scope="row" class="px-6 py-4 border">9MM (9X19)
                                                                    </td>
                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">CANO</th>
                                                                    <td scope="row" class="px-6 py-4 border">94MM / 3.7
                                                                        / 6 RAIAS À DIREITA</td>
                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">PESO</th>
                                                                    <td scope="row" class="px-6 py-4 border">785g /
                                                                        27,69oz</td>
                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">AÇÃO</th>
                                                                    <td scope="row" class="px-6 py-4 border">Strike
                                                                        Fire</td>
                                                                </tr>

                                                            </table>
                                                        </div>

                                                        <div>
                                                            <H3 class="text-black">INFORMAÇÕES</H3>
                                                            <table
                                                                class=" m-auto text-sm text-white bg-gray-800 text-left">


                                                                <tr class=" text-center">
                                                                    <th scope="row" class="px-6 py-3 border">DESCRIÇÃO
                                                                    </th>
                                                                    <th scope="row" class="px-6 py-3 border">DETALHE
                                                                    </th>

                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">ESPÉCIE
                                                                        </th>
                                                                    <td scope="row" class="px-6 py-4 border">PISTOLA
                                                                    </td>
                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">MARCA</th>
                                                                    <td scope="row" class="px-6 py-4 border">TAURUS
                                                                    </td>
                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">PREÇO</th>
                                                                    <td scope="row" class="px-6 py-4 border">4.000,00
                                                                    </td>
                                                                </tr>


                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div
                                                    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 w-full">
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-white w-[30%] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Fechar</button>
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-white w-[70%] bg-green-700 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Simular
                                                        Financiamento</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Revólveres ---->
                    <div class=" border-gray-800 w-[90%] m-auto pb-8 rounded-xl flex flex-col mb-8">
                        <h2 class="text-center m-4 text-2xl text-white">Revólveres</h2>
                        <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-8 m-auto">
                            <div
                                class="border w-[17em] row-span-1 h-[28em] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                <div class="mb-4 w-[15em]">
                                    <img class="rounded-md"
                                        src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-2.jpg"
                                        alt="pistola taurus">
                                </div>
                                <div class="text-center flex flex-col text-white gap-2">
                                    <p>TS9C GRAPHENE - 9MM</p>
                                    <span>Calibre: 9mm (9x19)</span>
                                    <span>Capacidade: 13+1 e 17+1</span>

                                    <!-- Modal toggle -->
                                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                        class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Mais detalhes
                                    </button>

                                    <!-- Main modal -->
                                    <div id="defaultModal" tabindex="-1" aria-hidden="true"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-2xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Terms of Service
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="defaultModal">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        With less than a month to go before the European Union enacts new
                                                        consumer privacy
                                                        laws for its citizens, companies around the world are updating their
                                                        terms of
                                                        service agreements to comply.
                                                    </p>
                                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        The European Union’s General Data Protection Regulation (G.D.P.R.)
                                                        goes into effect
                                                        on May 25 and is meant to ensure a common set of data rights in the
                                                        European Union.
                                                        It requires organizations to notify users as soon as possible of
                                                        high-risk data
                                                        breaches that could personally affect them.
                                                    </p>
                                                </div>
                                                <!-- Modal footer -->
                                                <div
                                                    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                                        accept</button>
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Armas Longas ---->
                    <div class=" border-gray-800 w-[90%] m-auto pb-8 rounded-xl flex flex-col mb-8">
                        <h2 class="text-center m-4 text-2xl text-white">Armas Longas</h2>
                        <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-8 m-auto">
                            <div
                                class="border w-[17em] row-span-1 h-[28em] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                <div class="mb-4 w-[15em]">
                                    <img class="rounded-md"
                                        src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-2.jpg"
                                        alt="pistola taurus">
                                </div>
                                <div class="text-center flex flex-col text-white gap-2">
                                    <p>TS9C GRAPHENE - 9MM</p>
                                    <span>Calibre: 9mm (9x19)</span>
                                    <span>Capacidade: 13+1 e 17+1</span>

                                    <!-- Modal toggle -->
                                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                        class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Mais detalhes
                                    </button>

                                    <!-- Main modal -->
                                    <div id="defaultModal" tabindex="-1" aria-hidden="true"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-2xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Terms of Service
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="defaultModal">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        With less than a month to go before the European Union enacts new
                                                        consumer privacy
                                                        laws for its citizens, companies around the world are updating their
                                                        terms of
                                                        service agreements to comply.
                                                    </p>
                                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        The European Union’s General Data Protection Regulation (G.D.P.R.)
                                                        goes into effect
                                                        on May 25 and is meant to ensure a common set of data rights in the
                                                        European Union.
                                                        It requires organizations to notify users as soon as possible of
                                                        high-risk data
                                                        breaches that could personally affect them.
                                                    </p>
                                                </div>
                                                <!-- Modal footer -->
                                                <div
                                                    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                                        accept</button>
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


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
                            <div
                                class="border w-[17em] row-span-1 h-[28em] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                <div class="mb-4 w-[15em]">
                                    <img class="rounded-md"
                                        src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-2.jpg"
                                        alt="pistola taurus">
                                </div>
                                <div class="text-center flex flex-col text-white gap-2">
                                    <p>TS9C GRAPHENE - 9MM</p>
                                    <span>Calibre: 9mm (9x19)</span>
                                    <span>Capacidade: 13+1 e 17+1</span>

                                    <!-- Modal toggle -->
                                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                        class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Mais detalhes
                                    </button>

                                    <!-- Main modal -->
                                    <div id="defaultModal" tabindex="-1" aria-hidden="true"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-[50em]">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        DETALHES
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="defaultModal">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">

                                                    <div id="default-carousel" class="relative w-full"
                                                        data-carousel="slide">
                                                        <!-- Carousel wrapper -->
                                                        <div class="relative w-full overflow-hidden rounded-lg md:h-96">
                                                            <!-- Item 1 -->
                                                            <div class="hidden duration-700 ease-in-out border"
                                                                data-carousel-item>
                                                                <img src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-1.jpg"
                                                                    class="absolute w-[20em] block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                                                    alt="...">
                                                            </div>

                                                            <!-- Item 2 -->
                                                            <div class="hidden duration-700 ease-in-out"
                                                                data-carousel-item>
                                                                <img src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-3.jpg"
                                                                    class="absolute w-[20em] block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                                                    alt="...">
                                                            </div>
                                                            <!-- Item 3 -->
                                                            <div class="hidden duration-700 ease-in-out"
                                                                data-carousel-item>
                                                                <img src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-4.jpg"
                                                                    class="absolute w-[20em] block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                                                    alt="...">
                                                            </div>
                                                        </div>
                                                        <!-- Slider indicators -->
                                                        <div
                                                            class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 bg-black p-4 rounded-lg">
                                                            <button type="button" class="w-3 h-3 rounded-full"
                                                                aria-current="true" aria-label="Slide 1"
                                                                data-carousel-slide-to="0"></button>
                                                            <button type="button" class="w-3 h-3 rounded-full"
                                                                aria-current="false" aria-label="Slide 2"
                                                                data-carousel-slide-to="1"></button>
                                                            <button type="button" class="w-3 h-3 rounded-full"
                                                                aria-current="false" aria-label="Slide 3"
                                                                data-carousel-slide-to="2"></button>
                                                        </div>
                                                        <!-- Slider controls -->
                                                        <button type="button"
                                                            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                                            data-carousel-prev>
                                                            <span
                                                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                                <svg aria-hidden="true"
                                                                    class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                                                    fill="none" stroke="currentColor"
                                                                    viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                                </svg>
                                                                <span class="sr-only">Previous</span>
                                                            </span>
                                                        </button>
                                                        <button type="button"
                                                            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                                            data-carousel-next>
                                                            <span
                                                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                                <svg aria-hidden="true"
                                                                    class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                                                    fill="none" stroke="currentColor"
                                                                    viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                                </svg>
                                                                <span class="sr-only">Next</span>
                                                            </span>
                                                        </button>
                                                    </div>

                                                    <div class="flex gap-4 justify-center">
                                                        <div>
                                                            <H3 class="text-black">DADOS TÉCNICOS</H3>
                                                            <table
                                                                class=" m-auto text-sm text-white bg-gray-800 text-left">


                                                                <tr class=" text-center">
                                                                    <th scope="row" class="px-6 py-3 border">
                                                                        DESCRIÇÃO</th>
                                                                    <th scope="row" class="px-6 py-3 border">DETALHE
                                                                    </th>

                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">CALIBRE
                                                                        </th>
                                                                    <td scope="row" class="px-6 py-4 border">9MM
                                                                        (9X19)</td>
                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">CANO
                                                                        </th>
                                                                    <td scope="row" class="px-6 py-4 border">94MM /
                                                                        3.7 / 6 RAIAS À DIREITA</td>
                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">PESO
                                                                        </th>
                                                                    <td scope="row" class="px-6 py-4 border">785g /
                                                                        27,69oz</td>
                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">AÇÃO
                                                                        </th>
                                                                    <td scope="row" class="px-6 py-4 border">Strike
                                                                        Fire</td>
                                                                </tr>

                                                            </table>
                                                        </div>

                                                        <div>
                                                            <H3 class="text-black">INFORMAÇÕES</H3>
                                                            <table
                                                                class=" m-auto text-sm text-white bg-gray-800 text-left">


                                                                <tr class=" text-center">
                                                                    <th scope="row" class="px-6 py-3 border">
                                                                        DESCRIÇÃO</th>
                                                                    <th scope="row" class="px-6 py-3 border">DETALHE
                                                                    </th>

                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">ESPÉCIE
                                                                        </th>
                                                                    <td scope="row" class="px-6 py-4 border">PISTOLA
                                                                    </td>
                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">MARCA
                                                                        </th>
                                                                    <td scope="row" class="px-6 py-4 border">TAURUS
                                                                    </td>
                                                                </tr>

                                                                <tr class="text-center">
                                                                    <td scope="row" class="px-6 py-4 border">PREÇO
                                                                        </th>
                                                                    <td scope="row" class="px-6 py-4 border">4.000,00
                                                                    </td>
                                                                </tr>


                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div
                                                    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 w-full">
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-white w-[30%] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Fechar</button>
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-white w-[70%] bg-green-700 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Simular
                                                        Financiamento</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Revólveres ---->
                    <div class=" border-gray-800 w-[90%] m-auto pb-8 rounded-xl flex flex-col mb-8">
                        <h2 class="text-center m-4 text-2xl text-white">Revólveres</h2>
                        <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-8 m-auto">
                            <div
                                class="border w-[17em] row-span-1 h-[500px] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                <div class="mb-4 w-[15em]">
                                    <img class="rounded-md"
                                        src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-2.jpg"
                                        alt="pistola taurus">
                                </div>
                                <div class="text-center flex flex-col text-white gap-2">
                                    <p>TS9C GRAPHENE - 9MM</p>
                                    <span>Calibre: 9mm (9x19)</span>
                                    <span>Capacidade: 13+1 e 17+1</span>

                                    <!-- Modal toggle -->
                                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                        class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Mais detalhes
                                    </button>

                                    <!-- Main modal -->
                                    <div id="defaultModal" tabindex="-1" aria-hidden="true"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-2xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Terms of Service
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="defaultModal">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        With less than a month to go before the European Union enacts new
                                                        consumer privacy
                                                        laws for its citizens, companies around the world are updating their
                                                        terms of
                                                        service agreements to comply.
                                                    </p>
                                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        The European Union’s General Data Protection Regulation (G.D.P.R.)
                                                        goes into effect
                                                        on May 25 and is meant to ensure a common set of data rights in the
                                                        European Union.
                                                        It requires organizations to notify users as soon as possible of
                                                        high-risk data
                                                        breaches that could personally affect them.
                                                    </p>
                                                </div>
                                                <!-- Modal footer -->
                                                <div
                                                    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                                        accept</button>
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Armas Longas ---->
                    <div class=" border-gray-800 w-[90%] m-auto pb-8 rounded-xl flex flex-col mb-8">
                        <h2 class="text-center m-4 text-2xl text-white">Armas Longas</h2>
                        <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-8 m-auto">
                            <div
                                class="border w-[17em] row-span-1 h-[28em] flex flex-nowrap flex-col justify-center items-center border-gray-300  bg-gray-700 p-4 rounded-md ">
                                <div class="mb-4 w-[15em]">
                                    <img class="rounded-md"
                                        src="https://taurusarmas.com.br/assets/img/content/products/product-350-photo-2.jpg"
                                        alt="pistola taurus">
                                </div>
                                <div class="text-center flex flex-col text-white gap-2">
                                    <p>TS9C GRAPHENE - 9MM</p>
                                    <span>Calibre: 9mm (9x19)</span>
                                    <span>Capacidade: 13+1 e 17+1</span>

                                    <!-- Modal toggle -->
                                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                        class="block text-white bg-gray-900  hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Mais detalhes
                                    </button>

                                    <!-- Main modal -->
                                    <div id="defaultModal" tabindex="-1" aria-hidden="true"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-2xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Terms of Service
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="defaultModal">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        With less than a month to go before the European Union enacts new
                                                        consumer privacy
                                                        laws for its citizens, companies around the world are updating their
                                                        terms of
                                                        service agreements to comply.
                                                    </p>
                                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        The European Union’s General Data Protection Regulation (G.D.P.R.)
                                                        goes into effect
                                                        on May 25 and is meant to ensure a common set of data rights in the
                                                        European Union.
                                                        It requires organizations to notify users as soon as possible of
                                                        high-risk data
                                                        breaches that could personally affect them.
                                                    </p>
                                                </div>
                                                <!-- Modal footer -->
                                                <div
                                                    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                                        accept</button>
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>





    </main>
@endsection
