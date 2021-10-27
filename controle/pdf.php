<?php
// carregando a biblioteca
require "../dompdf/autoload.inc.php";
require "conexao.php";
// carregando a classe que iremos utilizar
use Dompdf\Dompdf;

// criar o objeto da classe domPDF
$dompdf = new Dompdf();

$id = $_GET['id'];


/* $sql = "Select * from `tbchecklist` where `idChecklist` like '".$id."'"; */
$sql = "SELECT * FROM `tbchecklist` WHERE `idChecklist` LIKE '" . $id . "'";

$query = mysqli_query($conexao, $sql);
$dados = $query->fetch_assoc();

$html =
    "<!DOCTYPE html>
    <html lang='pt-br'>
    
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Relatório</title>
    
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'
            integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
    </head>
    <body>
        <h2>Inspenção Diária de Veículo. Check List de Viagem.</h2>
        <table class='table' border='1'>
        <thead>
            <tr>
                <th scope='col' colspan='8'>Nome: " . $dados['motorista'] . "</th>             
            </tr>
            <tr>
                <th scope='col' colspan='2'>Data: " . $dados['DATA'] . "</th>
                <th scope='col' colspan='2'>Hora: " . $dados['hora'] . "</th>
                <th scope='col' colspan='2'>Cavalo: " . $dados['placa_c'] . "</th>
                <th scope='col' colspan='2'>Carreta: " . $dados['placa_r'] . "</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope='col'>#</th>
                <th scope='col' colspan='4'>Itens para verificação</th>
                <th scope='col'>Sim</th>
                <th scope='col'>Não</th>
                <th scope='col'>N/A</th>
            </tr>
            <tr>
                <td scope='row'>1</td>
                    <td colspan='4'>Os pneus estão com calibragem correta?</td>";
                    
                    if($dados['p1'] == '1'){                        
                    $html .="
                    <td><input type='radio' checked</td>
                    <td></td>
                    <td></td>
                    </tr>";
                    } elseif ($dados['p1'] == '2'){
                    $html .= "
                    <td></td>
                    <td><input type='radio' checked></td>
                    <td></td>
                    </tr>";
                    } elseif ($dados['p1'] == '3'){
                    $html .= "
                    <td></td>
                    <td></td>
                    <td><input type='radio' checked></td>
                    </tr>";
                    }
                     
                    $html .="<tr>
                    <td scope='row'>2</td>
                    <td colspan='4'>Os pneus ainda tem borracha para rodar ?</td>";
                    if($dados['p2']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p2']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p2']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    
                    $html .="<tr>
                    <td scope='row'>3</td>
                    <td colspan='4'>Parafusos das rodas estão apertados ?</td>";
                    if($dados['p3']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p3']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p3']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    } 

                    $html .="<tr>
                    <td scope='row'>4</td>
                    <td colspan='4'>O Pisca-alerta está funcionando?</td>";
                    if($dados['p4']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p4']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p4']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }

                    $html .="<tr>
                    <td scope='row'>5</td>
                    <td colspan='4'>A luz de freio está funcionando?</td>";
                    if($dados['p5']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p5']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p5']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }

                    $html .="<tr>
                    <td scope='row'>6</td>
                    <td colspan='4'>Os faróis estão funcionando?</td>";
                    if($dados['p6']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p6']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p6']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }

                    $html .="<tr>
                    <td scope='row'>7</td>
                    <td colspan='4'>A luz de marcha a ré e sirene estão funcionando?</td>";
                    if($dados['p7']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p7']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p7']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }

                    $html .="<tr>
                    <td scope='row'>8</td>
                    <td colspan='4'>O nível do óleo lubrificante está entre o máximo e o mínimo?</td>";
                    if($dados['p8']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p8']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p8']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }

                    $html .="<tr>
                    <td scope='row'>9</td>
                    <td colspan='4'>Verificada a pressão do óleo lubrificante/Manômetro está funcionando corretamente?</td>";
                    if($dados['p8']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p9']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p9']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }

                    $html .="<tr>
                    <td scope='row'>10</td>
                    <td colspan='4'>O nível de água do radiador está normal?</td>";
                    if($dados['p10']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p10']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p10']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>11</td>
                    <td colspan='4'>Os extintores estão carregados e na validadede?</td>";
                    if($dados['p11']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p11']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p11']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>12</td>
                    <td colspan='4'>O kit de emergência/EPI'S estão completos?</td>";
                    if($dados['p12']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p12']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p12']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>13</td>
                    <td colspan='4'>As placas de simbologia de GLP estão em bom estado e bem fixadas?</td>";
                    if($dados['p13']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p13']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p13']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>14</td>
                    <td colspan='4'>O certificado de inpeção CIV está de acordo com a placa do Cavalo Trator e está na validade?</td>";
                    if($dados['p15']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p14']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p14']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>15</td>
                    <td colspan='4'>O certificado de inpeção CIPP está de acordo com a placa da carreta está na validade?</td>";
                    if($dados['p15']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p15']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p15']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>16</td>
                    <td colspan='4'>O certificado de inpeção CIV está de acordo com a placa da carreta e está na validade?</td>";
                    if($dados['p16']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p16']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p16']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>17</td>
                    <td colspan='4'>Está com o disco de TACÓGRAFO de reserva?</td>";
                    if($dados['p17']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p17']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p17']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>18</td>
                    <td colspan='4'>O CRLV(documento do veículo do Cavalo Trator está no veículo e está em dia?</td>";
                    if($dados['p18']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p18']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p18']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>19</td>
                    <td colspan='4'>O CRLV(documento do veículo do semirreboque está no veículo e está em dia?</td>";
                    if($dados['p19']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p19']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p19']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>20</td>
                    <td colspan='4'>A documentação do setor anterior foi entregue ao setor operacional?</td>";
                    if($dados['p20']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p20']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p20']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>21</td>
                    <td colspan='4'>O tacógrafo está funcionando corretamente?</td>";
                    if($dados['p21']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p21']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p21']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>22</td>
                    <td colspan='4'>O veículo está sem nenhum vazamento de ar?</td>";
                    if($dados['p22']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p22']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p22']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>23</td>
                    <td colspan='4'>O semirreboque possui ponto de aterramento e está em condições de uso?</td>";
                    if($dados['p23']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p23']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p23']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>24</td>
                    <td colspan='4'>As placas, arames e lacres do cavalo trator e do semirreboque estão ok?</td>";
                    if($dados['p24']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p24']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p24']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>25</td>
                    <td colspan='4'>Você tem conhecimento dos procedimentos de Carga e descarga para a operação?</td>";
                    if($dados['p25']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p25']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p25']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>26</td>
                    <td colspan='4'>Foi orientado pelos coordenadores ou encarregados sobre o plano de viagem?</td>";
                    if($dados['p26']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p26']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p26']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>27</td>
                    <td colspan='4'>O limpador de para-brisa está funcionando corretamente e tem água no reservatório?</td>";
                    if($dados['p27']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p27']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p27']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>28</td>
                    <td colspan='4'>As buzinas a ar e elétrica estão funcionando corretamente?</td>";
                    if($dados['p28']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p28']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p28']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>29</td>
                    <td colspan='4'>Sua habilitação está com você e está em dia?</td>";
                    if($dados['p29']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p29']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p29']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>30</td>
                    <td colspan='4'>O sistema de freio está funcionando perfeitamente?</td>";
                    if($dados['p30']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p30']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p30']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>31</td>
                    <td colspan='4'>O pino da 5ª roda está O.K, sem folga e sem problema de travameno?</td>";
                    if($dados['p31']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p31']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p31']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>32</td>
                    <td colspan='4'>O veículo tem 4 cones de segurança grandes e 6 pequenos?</td>";
                    if($dados['p32']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p32']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p32']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>33</td>
                    <td colspan='4'>O corta chamas esta no veículo e em condições de uso?</td>";
                    if($dados['p33']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p33']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p33']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>34</td>
                    <td colspan='4'>O veículo possui algum dano aparente, arranhã ou amassado(Se tiver informar no campo de observações?</td>";
                    if($dados['p34']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p34']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p34']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>35</td>
                    <td colspan='4'>O triângulo de segurança está no veículo e em condições de uso?</td>";
                    if($dados['p35']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p35']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p35']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>36</td>
                    <td colspan='4'>O cavalo trator possui macaco e está no veículo e está em condições de uso?</td>";
                    if($dados['p36']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p36']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p36']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
                    $html .="<tr>
                    <td scope='row'>37</td>
                    <td colspan='4'>O cavalo trator possui chave de roda e está em condições de uso?</td>";
                    if($dados['p37']=='1'){
                        $html.="<td><input type='radio' checked></td>
                                <td></td>
                                <td></td>
                                </tr>";
                    } elseif($dados['p37']=='2'){
                        $html.="<td></td>
                                <td><input type='radio' checked></td>
                                <td></td>
                                </tr>";
                    }elseif($dados['p37']=='3'){
                        $html.="<td></td>
                                <td></td>
                                <td><input type='radio'checked></td>
                                </tr>";
                    }
       "</tbody>
    </table>
<body>";

// carregando o html no objeto
$dompdf->loadHtml($html);

// escolhendo a configuração do papel a ser gerado o pdf
$dompdf->setPaper("A4", "portrait");

// renderizando o arquivo pdf
$dompdf->render();

// informando como será a saída do arquivo pdf
$dompdf->stream("relatorio.pdf", array("Attachment" => false));
