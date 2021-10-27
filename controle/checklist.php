<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigo do Frotista</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(window).on('load', function(){
            $('#modal').modal('show');
        })
    </script>
</head>

<body>
    <div class="modal fade" id="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Enviado com sucesso</h3>
                </div>
                <div class="modal-body">
                    <?php
                        include "conexao.php";
                        $p1 = $_POST['p1'];
                        $p2 = $_POST['p2'];
                        $p3 = $_POST['p3'];
                        $p4 = $_POST['p4'];
                        $p5 = $_POST['p5'];
                        $p6 = $_POST['p6'];
                        $p7 = $_POST['p7'];
                        $p8 = $_POST['p8'];
                        $p9 = $_POST['p9'];
                        $p10 = $_POST['p10'];
                        $p11 = $_POST['p11'];
                        $p12 = $_POST['p12'];
                        $p13 = $_POST['p13'];
                        $p14 = $_POST['p14'];
                        $p14 = $_POST['p14'];
                        $p14 = $_POST['p14'];
                        $p15 = $_POST['p15'];
                        $p16 = $_POST['p16'];
                        $p17 = $_POST['p17'];
                        $p18 = $_POST['p18'];
                        $p19 = $_POST['p19'];
                        $p20 = $_POST['p20'];
                        $p21 = $_POST['p21'];
                        $p22 = $_POST['p22'];
                        $p23 = $_POST['p23'];
                        $p24 = $_POST['p24'];
                        $p25 = $_POST['p25'];
                        $p26 = $_POST['p26'];
                        $p27 = $_POST['p27'];
                        $p28 = $_POST['p28'];
                        $p29 = $_POST['p29'];
                        $p30 = $_POST['p30'];
                        $p31 = $_POST['p31'];
                        $p32 = $_POST['p32'];
                        $p33 = $_POST['p33'];
                        $p34 = $_POST['p34'];
                        $p35 = $_POST['p35'];
                        $p36 = $_POST['p36'];
                        $p37 = $_POST['p37'];
                        $data = $_POST['data'];
                        $hora = $_POST['hora'];
                        $nome = $_POST['nome'];
                        $placa_c = $_POST['placa_c'];
                        $placa_r = $_POST['placa_r'];

                        

                        $sql = "INSERT INTO `tbchecklist` (`idChecklist`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `p31`, `p32`, `p33`, `p34`, `p35`, `p36`, `p37`, `fk_veiculo`, `fk_motorista`, `DATA`, `hora`, `motorista`, `placa_c`, `placa_r`) VALUES (NULL, '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13', '$p14', '$p15', '$p16', '$p17', '$p18', '$p19', '$p20', '$p21', '$p22', '$p23', '$p24', '$p25', '$p26', '$p27', '$p28', '$p29', '$p30', '$p31', '$p32', '$p33', '$p34', '$p35', '$p36', '$p37', NULL, NULL, '$data', '$hora', '$nome', '$placa_c', '$placa_r');";
                        
                        mysqli_query($conexao, $sql);
                        echo "Dados enviados com sucesso!";
                    ?>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-dark" href="../telas/index.php" role="button">Voltar</a>
                </div>
            </div>

        </div>

    </div>
    





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>