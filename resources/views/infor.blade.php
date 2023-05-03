@extends('template')
@section('content')
    <main class="bg-gray-200 text-gray-900">


        <div class="h-[50vh] border-b-2 flex flex-wrap bg-cover bg-img">
            <img class="h-[100%] w-[100%]" src="../imgs/capa-infor.jpg" alt="" />
        </div>

        <div class="flex justify-center flex-col m-8 h-[100%]">
            <h1 class="text-center font-bold mb-8 text-4xl uppercase">
                Aquisição de Armas de Fogo
            </h1>

            <p class="text-center">
                A Seção de Intendência e Subsistência, subordinada à Diretoria de Apoio
                Logístico, tem como responsabilidade os processos para aquisição,
                transfêrencia e renovação dos registros de arma de fogo de uso
                particular dos policiais militares da PMPA, além da emissão do Porte de
                Arma de Fogo para os policiais militares reformados e da reserva
                remunerada. Devido a necessidade de tornar mais célere e eficaz os
                processos de emissões de CRAF's e PAF's, bem como orientar quanto aos
                procedimentos a serem adotados pelos militares interessados, informamos
                as orientações quanto ao rol de documentos e procedimentos, conforme
                abaixo discriminados.
            </p>

            <span class="text-center mb-8">Estes processos são regulados pela Portaria nº 069/2019 - GAB. CMDº
                (Publicada no Adti. ao BG 078 II - 24 ABRIL 2019).</span>

                <div id="accordion-collapse" data-accordion="collapse" class="w-[70%] m-auto mb-8">
                    <h2 id="accordion-collapse-heading-1" class="border-b-2">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-blue-600 rounded-t-xl focus:ring-4 bg-blue-600 focus:ring-gray-200 hover:bg-gray-600"
                            data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                            aria-controls="accordion-collapse-body-1">
                            <span class="text-white">AQUISIÇÃO DE ARMA DE FOGO - <span class="text-gray-900 font-bold">ATIVA</span></span>
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0 text-white" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1"
                        class="">
                        <div class="p-5 border border-b-0 border-blue-500 bg-white">
                            <span>(Obs: OS DOCUMENTOS DEVEM SER ESCANEADOS NESSE SEGUINTE ORDEM, MAS
                                A CERTIDÃO, QUE ESTÁ NO ITEM 00, DEVE FICAR NO FINAL DO
                                PROCESSO.)</span><br />

                            <ul class=" space-y-1  list-disc list-inside dark:text-gray-400 p-4">
                                <li>
                                    00 - Capa e certidão, devidamente preenchida pelo computador.
                                    <a class="text-black font-bold" href="../Docs/Capa de Processo de Aquisição.docx" download>
                                        - CAPA DO PROCESSO DE AQUISIÇÃO
                                    </a>
                                    - CERTIDÃO DO PROCESSO DE AQUISIÇÃO. IMPRIMA, COLE A FOTO NA CAPA
                                    E ESCANEIE.
                                </li>

                                <li>
                                    01 -Requerimento padrão 1(uma) via, preenchida pelo computador.
                                    (Modelo) - IMPRIMA, ASSINE E ESCANEIA.
                                </li>

                                <li>
                                    02 - Declaração do CMT de acordo com § 1º do Art. 12, da Port.
                                    069/2019 - GAB. CMD°, Adit ao BG Nº 078 de 24 de Abril de 2019.
                                    <a class="text-black font-bold" href="../Docs/dec_cmt_4.doc" download>(Modelo)</a>
                                    - PODE SER ASSINADA ELETRÔNICAMENTE.
                                </li>

                                <li>03 - Identidade Militar (cópia). LEGÍVEL</li>

                                <li>
                                    04 - Foto 3x4 (fardado). COLE NA CAPA DO PROCESSO E ESCANEIE A
                                    CAPA COM ELA.
                                </li>

                                <li>
                                    05 - Comprovante de residência no nome do policial ou, caso não
                                    possua, baixe a declaração de residência.
                                    <a class="text-black font-bold" href="../Docs/Declaração_de_Residência.doc" download>(Baixe
                                        aqui)</a>
                                </li>

                                <li>
                                    06 - Ficha de apresentação do SIGPOL com filiação e pecúlio, dados
                                    funcionais, tempo de serviço e situações funcionais aberto.
                                </li>

                                <li>
                                    07 - Taxa GRU (Guia de recolhimento da união), com comprovante de
                                    pagamento -
                                    <a class="text-black font-bold"
                                        href="https://consulta.tesouro.fazenda.gov.br/gru_novosite/gru_simples.asp"
                                        target="_blank">(clique para ir para o site)</a>
                                </li>

                                <li>
                                    08 - Certidões Negativas:
                                    <ul class="pl-5 mt-2 space-y-1 list-disc list-inside">
                                        <li>
                                            <a href="https://portal.trf1.jus.br/Servicos/Certidao/">JUSTIÇA FEDERAL;</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://consultas.tjpa.jus.br/certidao/pages/pesquisaGeralCentralCertidao.action">JUSTIÇA
                                                ESTADUAL;</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://www.stm.jus.br/servicos-stm/certidao-negativa/emitir-certidao-negativa">JUSTIÇA
                                                MILITAR FEDERAL;</a>
                                        </li>
                                        <li>
                                            <a href="https://consultas.tjpa.jus.br/certidaomilitar/pages/InicioCertidao.action">JUSTIÇA
                                                MILITAR ESTADUAL;</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://www.tse.jus.br/servicos-eleitorais/certidoes/certidao-de-crimes-eleitorais">JUSTIÇA
                                                ELEITORAL;</a>
                                        </li>
                                        <li>
                                            <a href="https://antecedentes.policiacivil.pa.gov.br/consulta">POLÍCIA CIVIL;</a>
                                        </li>
                                        <li>CORREGEDORIA PM. (VIA PAE OU PRESENCIAL)</li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-2">
                        <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-blue-600  focus:ring-4 bg-blue-600 focus:ring-gray-200 hover:bg-gray-600"                            data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                            aria-controls="accordion-collapse-body-2">
                            <span class="text-white">AQUISIÇÃO DE ARMA DE FOGO - <span class="text-gray-900 font-bold">RESERVA REMUNERADA E REFORMADOS</span> </span>
                            <svg data-accordion-icon class="w-6 h-6 shrink-0 text-white" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                        <div class="border border-b-0 text-gray-900 bg-white border-blue-500 p-4 dark:border-gray-700">
                            <p class="mb-2 ">
                                Flowbite is first conceptualized and designed using the Figma
                                software so everything you see in the library has a design
                                equivalent in our Figma file.
                            </p>
                            <p class=" dark:text-gray-400">
                                Check out the
                                <a href="https://flowbite.com/figma/"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a>
                                based on the utility classes from Tailwind CSS and codsaamponents
                                from Flowbite.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-[70%] border border-black m-auto mb-4 mt-4"></div>

                <div class="overflow-x-auto mb-8">
                    <h2 class="text-center text-2xl mb-2 font-bold">DADOS PARA GERAÇÃO DA GRU.</h2>
                    <table class="w-[70%] m-auto text-sm text-white bg-gray-800 text-left">
                        <thead class="text-xs w-screen uppercase dark:text-gray-400">
                            <tr class=" text-center">
                                <th scope="col" class="px-6 py-3 border">UNIDADE GESTORA (GU)</th>
                                <th scope="col" class="px-6 py-3 border">GESTÃO</th>
                                <th scope="col" class="px-6 py-3 border">NPOME DA UNIDADE</th>
                                <th scope="col" class="px-6 py-3 border">CÓDIGO DO RECOLHIMENTO</th>
                                <th scope="col" class="px-6 py-3 border">Nº DE REFERÊNCIA</th>
                                <th scope="col" class="px-6 py-3 border">VALOR(R$)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th scope="row" class="px-6 py-4 border">167086</th>
                                <td class="px-6 py-4 border">00001</td>
                                <td class="px-6 py-4 border">FUNDO DO EXÉRCITO</td>
                                <td class="px-6 py-4 border">11300-0</td>
                                <td class="px-6 py-4 border">20841</td>
                                <td class="px-6 py-4 border">25,00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

        </div>




    </main>
@endsection
