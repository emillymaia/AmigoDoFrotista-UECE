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
                    <h3 class="modal-title">Cadastrado com sucesso</h3>
                </div>
                <div class="modal-body">
                    <?php
                        include "conexao.php";
                        $nome = $_POST['nome'];
                        $sobrenome = $_POST['sobrenome'];
                        $cpf = $_POST['cpf'];

                        

                        $sql = "INSERT INTO `tbmotorista` (`idMotorista`, `Nome`, `Sobrenome`, `Assinatura`, `Cpf`) VALUES (NULL, '$nome', '$sobrenome', '', '$cpf');";
                        //echo $sql;
                        mysqli_query($conexao, $sql);
                        echo "Motorista salvo com sucesso!";
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