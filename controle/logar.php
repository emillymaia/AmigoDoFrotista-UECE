<?php 
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        include "conexao.php";

        session_start();

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sql = "Select * from tbanalistas where Loguim = '$usuario' and Senha = MD5('$senha')";
        
        $resultado = mysqli_query($conexao, $sql);

        $contaRegistros = mysqli_num_rows($resultado);

        echo $contaRegistros;
        
        // Conta o registro do usuario no banco, se tiver mais que zero ele redireciona pra entar, senão volta pra pagina inicial
        if ($contaRegistros > 0){
            while ($dados = mysqli_fetch_assoc($resultado)){
                $_SESSION['idtbAnalistas'] = $dados['idtbAnalistas'];
                $_SESSION['Nome'] = $dados['Nome'];
                $_SESSION['Loguim'] = $dados['Loguim'];
                $_SESSION['Senha'] = $dados['Senha'];
            }
            header("location: ../telas/index.php");
        } else {
        header("location: ../index.php");
        }
    }

?>