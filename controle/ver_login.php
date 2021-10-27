<?php 
session_start();


    if (isset($_SESSION['usuario']) && isset($_SESSION['senha'])) {
        include "conexao.php";

        

        $usuario = $_SESSION['usuario'];
        $senha = $_SESSION['senha'];

        $sql = "Select * from tbanalistas where Loguim = '$usuario' and Senha = MD5('$senha')";
        
        $resultado = mysqli_query($conexao, $sql);

        $contaRegistros = mysqli_num_rows($resultado);

        // echo $contaRegistros;
        
        
        if ($contaRegistros <= 0){         
            header("location: ../index.php");
        }
    } else {
        //header("location: ../index.php");
        }

?>