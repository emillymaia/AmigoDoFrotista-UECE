<?php
include "../controle/conexao.php";
include "../controle/ver_login.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigo do Frotista</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="conteiner">
        <!-- Menu Topo -->
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active text-light" href="index.php">Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-light" href="?opcao=1">Motorista</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-light" href="?opcao=2">Veículos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-light" href="?opcao=3">Relatório</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-light" href="../controle/sair.php">Sair</a>
            </li>
        </ul>

        <?php
        if (isset($_GET['opcao'])) {
            switch ($_GET['opcao']) {
                case 1:
                    include "motorista.php";
                    break;
                case 2:
                    include "veiculo.php";
                    break;
                case 3:
                    include "relatorio.php";
                    break;
            }
        } else {
        ?>


            <div class="row"><br></div><!-- Linha de espaço Topo -->
            <div class="row" id="cabecalho">
                <!-- Topo do index -->
                <div class="col-sm-1">
                    <!-- Coluna de espaço -->
                </div>
                <div class="col-sm-3">
                    <img src="../img/Logo-Rod1.png" alt="Logo Rod Transportes" width="100%">
                </div>
                <div class="col-sm-7 ">
                    <h3 class="text-center"> Realize a Inspeção Diária de Veículo.</h3>
                    <h3 class="text-center"> Faça o Check List de viagem.</h3>
                </div>
                <div class="col-sm-1">
                    <!-- Coluna de espaço -->
                </div>
            </div>
            <form method="POST" action="../controle/checklist.php">
                <div class="row">
                    <div class="col-sm-1">
                        <!-- Coluna de espaço -->
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01">Data:</label>
                        <input type="date" class="form-control" id="data" name="data" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02">Hora:</label>
                        <input type="time" class="form-control" id="hora" name="hora" required>
                    </div>
                    <div class="col">
                        <h5 class="text-center" id="aviso">PRODUTO TRANSPORTADO <br> Gás Liquefeito de Petróleo - GLP</h5>
                    </div>
                    <div class="col-sm-1">
                        <!-- Coluna de espaço -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1">
                        <!-- Coluna de espaço -->
                    </div>
                    <div class="col-md-4">
                        <!-- <label for="validationCustom03">Nome Completo:</label>
                        <input type="text" name="" id="" placeholder="Nome" required> -->
                        <label for="validationCustom04" required>Nome Completo:</label>
                        <select id="nome" name="nome" class="form-control" required>
                            <?php
                            $sql = "SELECT Nome, Sobrenome FROM `tbmotorista`";
                            $resultado = mysqli_query($conexao, $sql);
                            while ($dados = mysqli_fetch_assoc($resultado)) {
                                echo "<option>" . $dados['Nome'] . " " . $dados['Sobrenome'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom04" required>Placa Cavalo</label>
                        <select id="placa_c" name="placa_c" class="form-control">
                            <?php
                            $sql = "SELECT Placa FROM `tbveiculo`";
                            $resultado = mysqli_query($conexao, $sql);
                            while ($dados = mysqli_fetch_assoc($resultado)) {
                                echo "<option>" . $dados['Placa'] . "</option>";
                            }
                            ?>
                        </select>

                    </div>
                    <div class="col-md">
                        <label for="validationCustom05" required>Placa Carreta</label>
                        <select id="placa_r" name="placa_r" class="form-control">
                            <?php
                            $sql = "SELECT Placa FROM `tbveiculo`";
                            $resultado = mysqli_query($conexao, $sql);
                            while ($dados = mysqli_fetch_assoc($resultado)) {
                                echo "<option>" . $dados['Placa'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-1">
                        <!-- Coluna de espaço -->
                    </div>
                </div>


    </div>
    <div class="conteiner">
        <div class="row"><br></div><!-- Linha de espaço Topo -->
        <!-- <h4 class="text-center">ITENS INSPECIONADOS</h1> -->
        <div class="row">
            <div class="col-md-1">
                <!-- Coluna de espaço -->
            </div>
            <div class="col-md">
                <h5 class="tex-center">Antes do carregamento<h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <!-- Coluna de espaço -->
            </div>
            <div class="col-md-10">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class="list">#</th>
                            <th scope="col" class="list">Itens para verificação</th>
                            <th scope="col" class="list">Sim</th>
                            <th scope="col" class="list">Não</th>
                            <th scope="col" class="list">N/A</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Os pneus estão com calibragem correta?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p1" id="p1" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p1" id="p1" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p1" id="p1" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Os pneus ainda tem borracha para rodar ?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p2" id="p2" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p2" id="p2" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p2" id="p2" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Parafusos das rodas estão apertados?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p3" id="p3" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p3" id="p3" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p3" id="p3" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>O Pisca-alerta está funcionando?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p4" id="p4" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p4" id="p4" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p4" id="p4" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>A luz de freio está funcionando?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p5" id="p5" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p5" id="p5" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p5" id="p5" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Os faróis estão funcionando?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p6" id="p6" value="1" checked>
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p6" id="p6" value="2" checked>
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p6" id="p6" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>A luz de marcha a ré e sirene estão funcionando?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p7" id="p7" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p7" id="p7" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p7" id="p7" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>O nível do óleo lubrificante está entre o máximo e o mínimo?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p8" id="p8" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p8" id="p8" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p8" id="p8" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Verificada a pressão do óleo lubrificante/Manômetro está funcionando corretamente?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p9" id="p9" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p9" id="p9" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p9" id="p9" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>O nível de água do radiador está normal?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p10" id="p10" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p10" id="p10" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p10" id="p10" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>Os extintores estão carregados e na validadede?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p11" id="p11" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p11" id="p11" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p11" id="p11" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td>O kit de emergência/EPI'S estão completos?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p12" id="p12" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p12" id="p12" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p12" id="p12" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td>As placas de simbologia de GLP estão em bom estado e bem fixadas?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p13" id="p13" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p13" id="p13" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p13" id="p13" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">14</th>
                            <td>O certificado de inpeção CIV está de acordo com a placa do Cavalo Trator e está na validade?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p14" id="p14" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p14" id="p14" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p14" id="p14" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td>O certificado de inpeção CIPP está de acordo com a placa da carreta está na validade?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p15" id="p15" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p15" id="p15" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p15" id="p15" value="3" checked>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">16</th>
                            <td>O certificado de inpeção CIV está de acordo com a placa da carreta e está na validade?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p16" id="p16" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p16" id="p16" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p16" id="p16" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">17</th>
                            <td>Está com o disco de TACÓGRAFO de reserva?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p17" id="p17" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p17" id="p17" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p17" id="p17" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">18</th>
                            <td>O CRLV(documento do veículo do Cavalo Trator está no veículo e está em dia?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p18" id="p18" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p18" id="p18" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p18" id="p18" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">19</th>
                            <td>O CRLV(documento do veículo do semirreboque está no veículo e está em dia?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p19" id="p19" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p19" id="p19" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p19" id="p19" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">20</th>
                            <td>A documentação do setor anterior foi entregue ao setor operacional?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p20" id="p20" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p20" id="p20" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p20" id="p20" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">21</th>
                            <td>O tacógrafo está funcionando corretamente?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p21" id="p21" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p21" id="p21" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p21" id="p21" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">22</th>
                            <td>O veículo está sem nenhum vazamento de ar?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p22" id="p22" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p22" id="p22" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p22" id="p22" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">23</th>
                            <td>O semirreboque possui ponto de aterramento e está em condições de uso?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p23" id="p23" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p23" id="p23" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p23" id="p23" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">24</th>
                            <td>As placas, arames e lacres do cavalo trator e do semirreboque estão ok?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p24" id="p24" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p24" id="p24" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p24" id="p24" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">25</th>
                            <td>Você tem conhecimento dos procedimentos de Carga e descarga para a operação?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p25" id="p25" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p25" id="p25" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p25" id="p25" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">26</th>
                            <td>Foi orientado pelos coordenadores ou encarregados sobre o plano de viagem?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p26" id="p26" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p26" id="p26" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p26" id="p26" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">27</th>
                            <td>O limpador de para-brisa está funcionando corretamente e tem água no reservatório?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p27" id="p27" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p27" id="p27" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p27" id="p27" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">28</th>
                            <td>As buzinas a ar e elétrica estão funcionando corretamente?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p28" id="p28" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p28" id="p28" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p28" id="p28" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">29</th>
                            <td>Sua habilitação está com você e está em dia?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p29" id="p29" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p29" id="p29" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p29" id="p29" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">30</th>
                            <td>O sistema de freio está funcionando perfeitamente?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p30" id="p30" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p30" id="p30" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p30" id="p30" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">31</th>
                            <td>O pino da 5ª roda está O.K, sem folga e sem problema de travameno?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p31" id="p31" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p31" id="p31" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p31" id="p31" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">32</th>
                            <td>O veículo tem 4 cones de segurança grandes e 6 pequenos?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p32" id="p32" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p32" id="p32" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p32" id="p32" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">33</th>
                            <td>O corta chamas esta no veículo e em condições de uso?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p33" id="p33" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p33" id="p33" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p33" id="p33" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">34</th>
                            <td>O veículo possui algum dano aparente, arranhã ou amassado(Se tiver informar no campo de observações?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p34" id="p34" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p34" id="p34" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p34" id="p34" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">35</th>
                            <td>O triângulo de segurança está no veículo e em condições de uso?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p35" id="p35" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p35" id="p35" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p35" id="p35" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">36</th>
                            <td>O cavalo trator possui macaco e está no veículo e está em condições de uso?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p36" id="p36" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p36" id="p36" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p36" id="p36" value="3" checked>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">37</th>
                            <td>O cavalo trator possui chave de roda e está em condições de uso?</td>
                            <td>
                                <input class="form-check-input" type="radio" name="p37" id="p37" value="1">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p37" id="p37" value="2">
                            </td>
                            <td>
                                <input class="form-check-input" type="radio" name="p37" id="p37" value="3" checked>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                </form>
            </div>
            <div class="col-sm-1">
                <!-- Coluna de espaço -->
            </div>
            
            <!-- Fim da linha da tabela 1 -->

            <!-- <div class="row">
                    <div class="col-md-1">
                        
                    </div>
                    <div class="col-md">
                        <h5 class="tex-center">Após o carregamento<h5>
                    </div>
                </div> -->
        </div>
    </div>
    </section>

    <!-- Rodape -->
    <section class="rodape">
        <footer class="bg-black text-center text-lg-start p-2">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">ROD TRANSPORTES</h5>

                        <p>
                            Escritório administrativo: Avenida Santos Dumont, 5753 - Complexo São Mateus - Torres Office - Sala 1009 - Bairro Papicu - Fortaleza - Ceará - CEP: 60.175-047 Telefone: (85) 3099.9797
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <!-- <h5 class="text-uppercase">Footer text</h5> -->

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.3126482881626!2d-38.48226158524092!3d-3.741903397277614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7462936751b73%3A0x296ea6d9c5268c04!2sROD%20TRANSPORTES!5e0!3m2!1spt-BR!2sbr!4v1627856205893!5m2!1spt-BR!2sbr" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Rod Transportes LTDA:
                <a class="text-light" href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJNsvPmlHSrMcbldKWqMqkzzsJdBqMpgbQsvdKHmtJHwGRKjRFbfDQRtGGvgxJlCLRLtHzL" target="_blank">finaceiro@rodtransportes.com.br</a>
            </div>
            <!-- Copyright -->
        </footer>
    </section>
<?php
        }
?>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>