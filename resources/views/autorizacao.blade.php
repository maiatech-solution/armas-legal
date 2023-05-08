@section('content')
<body>
    <page size="A4">
      <div class="header">
        <div class="logo-header">
          <img src="./img/brasao.png" alt="" class="img-header" />
        </div>

        <h3 class="body-header">
          GOVERNO DO ESTADO DO PARÁ <br />
          SECRETARIA DE ESTADO DE SEGURANÇA PÚBLICA E DEFESA SOCIAL POLÍCIA
          MILITAR DO PARÁ <br />
          FUNDO DE ASSISTÊNCIA SOCIAL DA POLÍCIA MILITAR
        </h3>
        <div class="logo-header">
          <img src="./img/fas.jpg" alt="" class="img-header" />
        </div>
      </div>

      <h2 style="text-align: center;">Programa Arma Legal</h2>

      <table class="table">
        <thead class="theader">
          <tr>
            <th colspan="3">REQUERIMENTO</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="3">
                AO Ilm.º Sr. DIRETOR DO FASPM</td>
          </tr>
          <tr>
            <td colspan="3">
              OBJETIVO: Aquisição de ARMA de uso permitido, em consignação.
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <ul>
                DOCUMENTAÇÃO EM ANEXO
                <li>1- Copia do contracheque do mês atual</li>
                <li>2- Identidade Militar</li>
                <li>3- Autorização</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td colspan="2">NOME: <br>
                <span>...</span>
            </td>
            <td colspan="1">POSTO/GRADUAÇÃO: <br>

            </td>
          </tr>
          <tr>
            <td colspan="1">RG:

            </td>
            <td colspan="1">MF:

            </td>
            <td colspan="1">OPM:

            </td>
          </tr>
          <tr>
            <td colspan="3">End.:

            </td>
          </tr>
          <tr>
            <td colspan="1">BAIRRO:

            </td>
            <td colspan="1">MUNICÍPIO:

            </td>
            <td colspan="1">CEP:

            </td>
          </tr>
          <tr>
            <td colspan="1">TEL:
                <span>...</span>
            </td>
            <td colspan="2">E-MAIL:
                <span>...</span>
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <p>
                Integrante do Quadro de Associados deste FASPM, vem mui
                respeitosamente solicitar a V.S.ª., que se digne em AUTORIZAR
                este Requerente que seja atendido pelo Programa ARMA LEGAL o
                financiamento para AQUISIÇÃO DE 01 um (a) <span>...</span> ,
                calibre: <span>...</span>, modelo: <span>...</span>, No valor de R$
                <span>...</span>, junto a Empresa AMAZON SERVIÇOS
                DE ARMARIA E LIMPEZA EIRELI, cujo CNPJ 40.720.043/0001-66,
                localizada na Tv. Segunda De Queluz, nº 582, sala 04, CANUDOS,
                BELÉM-PA, por intermédio do Fundo de Assistência Social da
                Polícia Militar, de acordo com o Contrato nº 011/2023, oriundo
                do Processo Licitatório nº 001/2023 – FASPM – CREDENCIAMENTO Nº
                001/2023 – CPL/FASPM, conforme publicação do D.O nº 35.376, sob
                consignação REEMBOLSÁVEL cuja as despesas serão RESSARCIDAS ao
                FASPM em <span>...</span> parcelas fixas mensais de R$ <span>...</span>, a serem
                descontadas no Contra Cheque deste Signatário. <br><br>
                Nestes Termos
                <br><br>
                Pede deferimento!
                <br><br><br>
                Assinatura do Requerente/MF: _________________________________________________________

              </p>
            </td>
          </tr>
        </tbody>
      </table>
    </page>
  </body>

  <style>
    body {
    background: rgb(204, 204, 204);
  }

  page {
    background: white;
    display: block;
    margin: 0 auto;
    margin-bottom: 0.5cm;
    box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
  }

  page[size="A4"] {
    width: 21cm;
    height: 29.7cm;
  }

  page[size="A4"][layout="portrait"] {
    width: 29.7cm;
    height: 21cm;
  }

  @media print {
    body,
    page {
      margin: 0;
      box-shadow: 0;
    }
  }

  .header {
    display: flex;
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid gray;
    justify-content: center;
    align-items: center;
  }

  .logo-header{
    width: 20%;
  }

  .logo-header .img-header{
    width: 90px;
  }

  .header .body-header{
    width: 60%;
  }

  table {
    border-collapse: collapse;
    width: 90%;
    font-size: 80%;
    display: flex;
    margin: 0 auto;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border: 1px solid black;
  }

  table tr td{
    padding: 8px;
    border: 1px solid black;
  }

</style>
@endsection
