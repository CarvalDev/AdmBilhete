@extends('layouts.mainLayoutLogin')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/formularioPassageiro.css') }}" type="text/css">
@endpush

@section('title', 'Cadastro Passageiro')

@section('content')
<style>
    .pColor
    {
    background-color: red;
    border: 1px solid black;
    color: white;
    }
    .btnCustom
    {
        border: 1px solid rgb(0, 66, 118)!important; 
        color: rgb(0, 66, 118)!important; 
    }
    .boxView{
        border: 1px solid black
    }

</style>
    <div class="w-100 h-100 border border-2 d-flex justify-content-center align-items-center ">
        <div class="conteudoCima border border-2">

        </div>
        
        <div class="formulario h-75 w-75 border border-2">
                <p class="w-100 text-center border border-2 pColor fw-bold rounded ">Dados do Usuario</p>
        <div class="boxView rounded">
            <div class="w-100">
                <p class="text-center">Para se cadastrar, informe os dados abaixo e clique em "Concordo".</p>
                <p class="fw-bold text-center">Os campos marcados com * são obrigatórios</p>
            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <form action="">
                                        <label class="col-form-label fs-6" for="">*Nome:</label>
                                </div>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row ">
                                    <div class="col-md-4">
                                        <label class="col-form-label fs-6" for="">*Data Nascimento:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input class="form-control" type="date" name="" id="">
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="col-form-label fs-6" for="">*CPF: </label>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" name="" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="col-form-label fs-6" for="">*Sobrenome:</label>
                                </div>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <label class="col-form-label fs-6" for="">*Nacionalidade:</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input class="" type="radio" name="" id="">Brasileira
                                        </div>
                                        <div class="col-md-4">
                                            <input class="" type="radio" name="" id="">Estrangeira
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                <label class="col-form-label fs-6" for="">* Tipo de CPF:</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input class="" type="radio" name="" id="">Titular
                                            </div>
                                            <div class="col-md-4">
                                                <input class="" type="radio" name=""
                                                    id="">Dependente
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border border-dark p-2 ">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">*Número:</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                        <div class="col-md-4">
                            <label for="">*Data de emissão:</label>
                            <input class="form-control" type="date" name="" id="">
                        </div>
                        <div class="col-md-4">
                            <label for="">*Estado Emissor RG: </label>
                            <select name="" class="form-select">
                                <option value="SP">São Paulo </option>
                                <option value="AC">Acre </option>
                                <option value="AL">Alagoas </option>
                                <option value="AM">Amazonas </option>
                                <option value="AP">Amapá </option>
                                <option value="BA">Bahia </option>
                                <option value="CE">Ceará </option>
                                <option value="DF">Distrito Federal </option>
                                <option value="ES">Espirito Santo </option>
                                <option value="GO">Goiás </option>
                                <option value="MA">Maranhão </option>
                                <option value="MG">Minas Gerais </option>
                                <option value="MS">Mato Grosso do Sul </option>
                                <option value="MT">Mato Grosso </option>
                                <option value="PA">Pará </option>
                                <option value="PB">Paraíba </option>
                                <option value="PE">Pernambuco </option>
                                <option value="PI">Piauí </option>
                                <option value="PR">Paraná </option>
                                <option value="RJ">Rio de Janeiro </option>
                                <option value="RN">Rio Grande do Norte </option>
                                <option value="RO">Rondônia </option>
                                <option value="RR">Roraima </option>
                                <option value="RS">Rio Grande do Sul </option>
                                <option value="SC">Santa Catarina </option>
                                <option value="SE">Sergipe </option>
                                <option value="TO">Tocantins </option>
                            </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="text-center fw-bold ">Termo de Aceite</p>
                    <div class="d-flex justify-content-center align-items-center">
                        <textarea class="" name="termoAceite" cols="90" rows="10" readonly="readonly"
                            id="formUsuario_termoAceite">﻿&quot;TERMO DE CI&#xCA;NCIA E ADES&#xC3;O &#xC0;S CONDI&#xC7;&#xD5;ES DE USO DO BILHETE &#xDA;NICO CADASTRADO&quot;

                                I – Leia-o com aten&#xE7;&#xE3;o, certificando-se de compreender os seus termos.
                                
                                II – Este documento &#xE9; um Termo de Ci&#xEA;ncia e Ades&#xE3;o – TCA pactuado entre a S&#xE3;o Paulo Transporte S/A, sociedade de economia mista, vinculada &#xE0; Municipalidade, com sede nesta Capital, &#xE0; Rua Boa Vista, 236, centro, cadastrada no CPNJ/MF sob o n&#xBA; 60.498.417-58, doravante denominada &quot;SPTrans&quot;, Companhia do Metropolitano de S&#xE3;o Paulo, com sede nesta Capital &#xE0; Rua Boa Vista, 175 – 7&#xBA; andar – Bloco B, centro, cadastrada no CNPJ/MF sob o n&#xBA; 62.070.362/0001-06, doravante denominada &quot;Metr&#xF4;&quot; e a Companhia Paulista de Trens Metropolitanos, com sede nesta Capital &#xE0; Rua Boa Vista, 175 – 9&#xBA; andar, centro, cadastrada no CNPJ/MF sob o n&#xBA; 71.832.679/0001-23, doravante denominada &quot;CPTM&quot;, e os usu&#xE1;rios do Sistema de Transporte Coletivo Urbano de Passageiros da Cidade de S&#xE3;o Paulo que efetuarem seu cadastro no site da SPTrans (http://bilheteunico.sptrans.com.br/ )  para utiliza&#xE7;&#xE3;o do Bilhete &#xDA;nico Mensal.
                                
                                
                                1.	O presente TCA, v&#xE1;lido perante todos os usu&#xE1;rios cadastrados no Sistema de Transporte Coletivo Urbano (&#xD4;nibus, Metr&#xF4;/CPTM), regulamenta, de forma complementar, a utiliza&#xE7;&#xE3;o do Bilhete &#xDA;nico Cadastrado.
                                
                                2.	Ao efetuar o cadastro, o usu&#xE1;rio aceita expressamente, sem reservas ou ressalvas, todas as disposi&#xE7;&#xF5;es deste TCA.
                                
                                3.	Ao aceitar o Termo de Ades&#xE3;o o usu&#xE1;rio est&#xE1; ciente de que seus dados cadastrais ser&#xE3;o inclu&#xED;dos no banco de dados da SPTrans.
                                
                                4.	As operadoras reservam-se o direito de, a seu exclusivo crit&#xE9;rio e a qualquer tempo, modificar o presente Termo, incluindo novas condi&#xE7;&#xF5;es e/ou restri&#xE7;&#xF5;es ou suprimindo outras, divulgando tais altera&#xE7;&#xF5;es, sempre, por meio do seu site oficial.
                                
                                5.	Um &#xFA;nico Bilhete ser&#xE1; emitido para cada usu&#xE1;rio que fizer o seu cadastro no site da SPTrans, fornecendo todos os dados necess&#xE1;rios, e poder&#xE1; ser utilizado como Vale Transporte, Estudante e Comum, conforme o tipo de cr&#xE9;dito adquirido pelo usu&#xE1;rio. 
                                
                                6.	O cadastro conter&#xE1; dados obrigat&#xF3;rios, dados e uma pesquisa  opcionais. O n&#xE3;o fornecimento dos dados obrigat&#xF3;rios, marcados com um asterisco, implicar&#xE1; na n&#xE3;o emiss&#xE3;o do Bilhete.
                                
                                6.1 Ao se cadastrar o usu&#xE1;rio fica ciente de que o cadastro, bem como o endere&#xE7;o de e.mail, e o n&#xFA;mero de telefone celular constituem canais de comunica&#xE7;&#xE3;o que a SPTrans poder&#xE1; utilizar para transmitir  informa&#xE7;&#xF5;es importantes acerca do Bilhete &#xDA;nico, situa&#xE7;&#xE3;o cadastral, ou relativa a algum benef&#xED;cio tarif&#xE1;rio que necessite alguma a&#xE7;&#xE3;o ou aten&#xE7;&#xE3;o do usu&#xE1;rio.
                                
                                6.2 &#xC9; responsabilidade do usu&#xE1;rio  manter v&#xE1;lidos e atualizados os dados cadastrais, o endere&#xE7;o de e.mail, e o n&#xFA;mero do telefone celular.
                                
                                6.3 Caso o endere&#xE7;o de e-mail e/ou o n&#xFA;mero do telefone celular estejam indispon&#xED;veis ou inv&#xE1;lidos, a SPTrans poder&#xE1; utilizar o cadastro para enviar informa&#xE7;&#xF5;es acerca do Bilhete &#xDA;nico do usu&#xE1;rio, cabendo-lhe, portanto, a responsabilidade de verificar, periodicamente, seu cadastro no s&#xED;tio da SPTrans para obter informa&#xE7;&#xF5;es acerca de seu Bilhete &#xDA;nico. 
                                
                                7.	O usu&#xE1;rio &#xE9; inteiramente respons&#xE1;vel pela veracidade e atualiza&#xE7;&#xE3;o dos dados cadastrais informados, e est&#xE1; sujeito &#xE0;s san&#xE7;&#xF5;es previstas em legisla&#xE7;&#xE3;o caso seja constatada qualquer informa&#xE7;&#xE3;o falsa.
                                
                                8.	O Bilhete &#xDA;nico cadastrado conter&#xE1; o nome, o n&#xFA;mero do CPF e, se for  o caso,  a fotografia do seu titular impressos, e ser&#xE1; de uso pessoal e intransfer&#xED;vel. A emiss&#xE3;o &#xE9; feita logo ap&#xF3;s a conclus&#xE3;o do cadastro (sem pend&#xEA;ncias) em um dos Postos de Venda e Atendimento. 
                                
                                9.	O cadastramento de login e de senha &#xE9; obrigat&#xF3;rio e importante para garantir que os dados do usu&#xE1;rio n&#xE3;o sejam acessados por pessoas n&#xE3;o autorizadas. Tamb&#xE9;m servir&#xE1; para que, em breve, o usu&#xE1;rio consulte o saldo e o hist&#xF3;rico de utiliza&#xE7;&#xE3;o do seu Bilhete e para que possa interagir com a SPTrans, caso deseje fazer algum questionamento ou sugest&#xE3;o de seu interesse. 
                                
                                10.	Quem optar pelo uso desse Bilhete carregado com cotas de tempo do tipo Comum (mensal e 24h-di&#xE1;ria) ter&#xE1; a sua disposi&#xE7;&#xE3;o, pelo per&#xED;odo de tempo adquirido, acesso a todos os &#xF4;nibus operados pelos concession&#xE1;rios e permission&#xE1;rios do Sistema de Transporte Coletivo Urbano Municipal gerenciado pela SPTrans, Metr&#xF4; e CPTM.
                                
                                11.	 A quantidade de viagens permitidas com o uso do Bilhete &#xDA;nico cadastrado carregado com cotas de tempo do tipo Comum (mensal e 24h-di&#xE1;ria) &#xE9; limitada a 10 utiliza&#xE7;&#xF5;es/dia.  Ao atingir o limite di&#xE1;rio de utiliza&#xE7;&#xF5;es o usu&#xE1;rio dever&#xE1; pagar com dinheiro o valor da tarifa para continuar seu percurso. 
                                
                                12.	O Bilhete &#xDA;nico cadastrado carregado com cr&#xE9;dito em dinheiro dos tipos Comum, Estudante  e de Vale-Transporte – d&#xE1; direito a realizar a quantidade de embarques de acordo com a pol&#xED;tica de utiliza&#xE7;&#xE3;o de cada tipo de cr&#xE9;dito adquirido. 
                                
                                13.	O Bilhete &#xDA;nico Estudante carregado com cotas de gratuidade (Passe livre) para uso no sistema de &#xF4;nibus: cada cota d&#xE1; direito a 2 viagens de 2 horas cada com at&#xE9; 4 embarques por viagem nos &#xF4;nibus e micro-&#xF4;nibus. Ao atingir esse limite o usu&#xE1;rio dever&#xE1; pagar, com outro tipo de cr&#xE9;dito eletr&#xF4;nico ou com dinheiro, o valor integral da tarifa para continuar seu percurso. Para uso no sistema trilhos (Metr&#xF4; e CPTM): cada cota d&#xE1; direito a at&#xE9; 02 embarques/dia, a contar da data e hor&#xE1;rio do primeiro registro. A cota para o Sistema Trilho expirar&#xE1; automaticamente no dia seguinte no mesmo hor&#xE1;rio do in&#xED;cio da utiliza&#xE7;&#xE3;o. 
                                
                                13.1.	 No caso de estudantes benefici&#xE1;rios de gratuidade por motivo de &quot;Baixa Renda&quot;, a comprova&#xE7;&#xE3;o se dar&#xE1; mediante enquadramento no n&#xED;vel de renda previsto atrav&#xE9;s de inscri&#xE7;&#xE3;o no Cad&#xDA;nico e da respectiva obten&#xE7;&#xE3;o do N&#xFA;mero de Identifica&#xE7;&#xE3;o Social – NIS.
                                
                                13.2.	Para o procedimento previsto no item anterior, os interessados dever&#xE3;o se dirigir a um Centro de Refer&#xEA;ncia e Assist&#xEA;ncia Social – CRAS, localizado na Cidade de S&#xE3;o Paulo e mantido pela Secretaria Municipal de Desenvolvimento e Assist&#xEA;ncia Social – SMADS, ou, no caso de outros munic&#xED;pios, a um &#xF3;rg&#xE3;o equivalente. 
                                
                                13.3.	Os estudantes referidos no item 13.1 dever&#xE3;o comparecer e comprovar o atendimento ao crit&#xE9;rio de baixa renda em um posto vinculado ao Cadastro &#xDA;nico para Programas Sociais – Cad&#xDA;nico com, no m&#xED;nimo, 45 (quarenta e cinco) dias de anteced&#xEA;ncia da realiza&#xE7;&#xE3;o da solicita&#xE7;&#xE3;o do benef&#xED;cio junto &#xE0; S&#xE3;o Paulo Transporte S.A. – SPTrans.
                                
                                14.	Estudantes, em qualquer de suas categorias, n&#xE3;o poder&#xE3;o acumular as cotas de gratuidade e/ou os cr&#xE9;ditos eletr&#xF4;nicos monet&#xE1;rios de um m&#xEA;s para o outro, devendo utilizar todo o saldo no pr&#xF3;prio m&#xEA;s de concess&#xE3;o.
                                
                                14.1. Em caso de n&#xE3;o utiliza&#xE7;&#xE3;o integral dos cr&#xE9;ditos eletr&#xF4;nicos monet&#xE1;rios, ou das cotas de gratuidade destinados aos estudantes, o saldo inicial ser&#xE1; complementado no m&#xEA;s seguinte at&#xE9; o limite mensal previsto para o respectivo curso e perfil do usu&#xE1;rio. 
                                
                                
                                15.	No caso dos estudantes, para que o Bilhete &#xDA;nico cadastrado possa ser habilitado para uso como Carteira de Identifica&#xE7;&#xE3;o Estudantil, &#xE9; necess&#xE1;rio que a institui&#xE7;&#xE3;o de ensino envie os dados para a SPTrans, confirmando a matr&#xED;cula e o endere&#xE7;o. Cada estudante, por sua vez, deve solicitar o benef&#xED;cio da gratuidade/desconto na passagem por meio do processo vigente, ou seja, atrav&#xE9;s dos meios disponibilizados pela SPTrans, Metr&#xF4; e CPTM,  pagando o pre&#xE7;o definido na legisla&#xE7;&#xE3;o  que &#xE9; de 7 tarifas de &#xF4;nibus para a aquisi&#xE7;&#xE3;o/revalida&#xE7;&#xE3;o e 2&#xAA; via da Carteira de Identifica&#xE7;&#xE3;o Estudantil.  
                                
                                16.	O Bilhete &#xDA;nico cadastrado n&#xE3;o poder&#xE1; ser cedido, emprestado, vendido, ou dada qualquer outra forma de permiss&#xE3;o para que terceiros o utilizem. O uso por terceiros configurar&#xE1; crime de falsidade ideol&#xF3;gica e tentativa de fraude contra o Poder P&#xFA;blico Municipal. Em  caso de perda, roubo ou extravio do Bilhete, o titular dever&#xE1; informar, imediatamente, &#xE0; SPTrans, por meio de liga&#xE7;&#xE3;o &#xE0; Central 156 para  registro da ocorr&#xEA;ncia. Esse registro tamb&#xE9;m poder&#xE1; ser feito nos postos de venda e servi&#xE7;os da SPTrans, cuja rela&#xE7;&#xE3;o de endere&#xE7;os consta do site http://bilheteunico.sptrans.com.br/.  
                                
                                16.1. Nos casos de cancelamento de Bilhete &#xDA;nico por perda, roubo ou furto, a emiss&#xE3;o de 2&#xAA; via, em qualquer de suas modalidades, dever&#xE1; ser precedida de apresenta&#xE7;&#xE3;o &#xE0; SPTrans, pelo usu&#xE1;rio interessado, do respectivo Boletim de Ocorr&#xEA;ncia – BO, que tamb&#xE9;m ser&#xE1; aceito se tiver sido obtido eletronicamente.  
                                
                                
                                17.	Como medida de preven&#xE7;&#xE3;o a fraudes, os agentes de fiscaliza&#xE7;&#xE3;o da Secretaria Municipal de Mobilidade e Transportes – SMT, da SPTrans e das concession&#xE1;rias e permission&#xE1;rias do Sistema poder&#xE3;o solicitar que o usu&#xE1;rio apresente o seu Bilhete e algum documento oficial com foto, para verifica&#xE7;&#xE3;o de titularidade. 
                                
                                18.	 A constata&#xE7;&#xE3;o de uso indevido poder&#xE1; acarretar a apreens&#xE3;o/cancelamento do cart&#xE3;o, a suspens&#xE3;o do benef&#xED;cio, a aplica&#xE7;&#xE3;o de penalidades e a cobran&#xE7;a do preju&#xED;zo causado ao sistema.
                                
                                19.	Caso n&#xE3;o haja saldo suficiente no cart&#xE3;o apreendido/cancelado por uso indevido para pagamento do preju&#xED;zo causado ao sistema, o titular dever&#xE1; pagar o valor em pec&#xFA;nia. 
                                
                                20.	 O usu&#xE1;rio compromete-se a utilizar o Bilhete &#xDA;nico cadastrado com observ&#xE2;ncia da legisla&#xE7;&#xE3;o vigente e, apenas e t&#xE3;o somente, para fins l&#xED;citos e contratualmente permitidos.   
                                
                                a – estudante: uso exclusivo e restrito no deslocamento de ida e volta entre a resid&#xEA;ncia e a institui&#xE7;&#xE3;o de ensino. O uso indevido pode acarretar o cancelamento do Bilhete &#xDA;nico, aplica&#xE7;&#xE3;o de penalidades,  e a suspens&#xE3;o do benef&#xED;cio. (Decreto n&#xBA; 58.639/19;  Portaria n&#xBA; 050/19-SMT.GAB)
                                
                                b – vale transporte: uso exclusivo para deslocamento de ida e volta entre a resid&#xEA;ncia e o local de trabalho. O uso indevido poder&#xE1; acarretar a aplica&#xE7;&#xE3;o de penalidades, o cancelamento do Bilhete &#xDA;nico, a comunica&#xE7;&#xE3;o do fato ao empregador e a solicita&#xE7;&#xE3;o de autoriza&#xE7;&#xE3;o para liberar o saldo bloqueado. (Lei n&#xBA; 7.418/85; Decreto n&#xBA; 95.247/87; Decreto                         n&#xBA; 58.639/19;  Portaria n&#xBA; 050/19-SMT.GAB) 
                                
                                c – usu&#xE1;rio de bilhete cadastrado comum: uso exclusivo do  titular do cart&#xE3;o. O uso indevido pode acarretar a aplica&#xE7;&#xE3;o de penalidades, e o cancelamento do Bilhete &#xDA;nico. (Decreto n&#xBA; 58.639/19;  Portaria n&#xBA; 050/19-SMT.GAB)
                                
                                20.1.	A SPTrans poder&#xE1; acionar as autoridades policiais para aplicar os procedimentos legais quanto &#xE0;s ocorr&#xEA;ncias de fraude identificadas, dados levantados, cart&#xF5;es apreendidos por uso indevido, comercializa&#xE7;&#xE3;o ilegal de cr&#xE9;ditos de passagem , e demais informa&#xE7;&#xF5;es relevantes para o combate &#xE0; fraude.
                                
                                20.2.	No  caso de emiss&#xE3;o de segunda via de cart&#xF5;es cancelados por motivo de uso indevido, auditorias, entre outros, a libera&#xE7;&#xE3;o para solicita&#xE7;&#xE3;o de novo cart&#xE3;o ocorre somente mediante comparecimento do titular na Central de Atendimento localizada na Rua Boa Vista, 274- Mezanino – Centro, ap&#xF3;s o cumprimento das penalidades. Ressaltamos que, para esse atendimento &#xE9; necess&#xE1;rio realizar agendamento atrav&#xE9;s do site: www.sptrans.com.br/atendimento.
                                
                                21 . No caso de transfer&#xEA;ncia de saldo, com ou sem a emiss&#xE3;o de uma segunda via do cart&#xE3;o, o servi&#xE7;o ser&#xE1; cobrado. O usu&#xE1;rio dever&#xE1; pagar o equivalente a 7 (sete) tarifas vigentes de &#xF4;nibus para solicitar o servi&#xE7;o. Esse custo ser&#xE1; dispensado no caso de constata&#xE7;&#xE3;o de mau funcionamento do cart&#xE3;o a ser cancelado por motivo de defeito de fabrica&#xE7;&#xE3;o. O roubo do cart&#xE3;o n&#xE3;o constitui motivo para a dispensa do pagamento do custo da emiss&#xE3;o de uma segunda via.
                                
                                22. Os valores contidos no cart&#xE3;o substitu&#xED;do no momento do registro da ocorr&#xEA;ncia de cancelamento, se ainda estiverem dentro do prazo de validade, ser&#xE3;o carregados no novo cart&#xE3;o, de mesma titularidade, como segue:
                                  
                                a – cr&#xE9;ditos em dinheiro  - ser&#xE3;o carregados no novo cart&#xE3;o os valores que existiam no momento do registro da ocorr&#xEA;ncia junto &#xE0; SPTrans por meio dos canais informados no item 16.
                                
                                b – as cotas de tempo estocadas, ou seja, que foram gravadas no cart&#xE3;o e cujas utiliza&#xE7;&#xF5;es ainda n&#xE3;o tenham sido iniciadas, ser&#xE3;o carregadas no novo cart&#xE3;o na mesma quantidade e tipo que constavam no cart&#xE3;o substitu&#xED;do.
                                
                                b.1 – as cotas de tempo cuja utiliza&#xE7;&#xE3;o j&#xE1; tenha sido iniciada, ou seja, que j&#xE1; tenha ocorrido no m&#xED;nimo um embarque nos ve&#xED;culos do Sistema, ser&#xE1; devolvido somente o tempo que restava para sua expira&#xE7;&#xE3;o.  
                                
                                23. O usu&#xE1;rio compromete-se a utilizar o Bilhete &#xDA;nico cadastrado com observ&#xE2;ncia da legisla&#xE7;&#xE3;o vigente e, apenas e t&#xE3;o somente, para fins l&#xED;citos e contratualmente permitidos.
                                
                                24. A nulidade ou inaplicabilidade de qualquer disposi&#xE7;&#xE3;o ou cl&#xE1;usula deste Termo n&#xE3;o afeta ou invalida as demais. Neste caso, havendo necessidade, a cl&#xE1;usula ou disposi&#xE7;&#xE3;o nula ou inaplic&#xE1;vel ser&#xE1; substitu&#xED;da por outra v&#xE1;lida que conduza ao mesmo resultado jur&#xED;dico/econ&#xF4;mico inicialmente pretendido.
                                
                                25. Fica eleito o Foro Privativo das Varas dos Feitos da Fazenda P&#xFA;blica desta Capital para dirimir todas e quaisquer quest&#xF5;es oriundas deste Termo de Ci&#xEA;ncia e Ades&#xE3;o, com expressa ren&#xFA;ncia de qualquer outro, por mais privilegiado que seja.&quot; 
                                
                                
                                
                                
                                Atualizado em 01/02/2021.
                                </textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btnCustom fw-bold">Concordo</button>
                    <button type="submit" class="btn btnCustom fw-bold">Cancelar</button>
                </div>


            </div>
        </div>
        </div>
    @endsection
