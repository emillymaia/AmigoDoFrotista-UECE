<?php

include "../controle/conexao.php";

?>
<div class="container" id="containerRelatorio">
    <div class="row-sm"><br><br><br></div>
    <div class="row">
        <div class="col-2">


        </div>
        <div class="col-8">
            <center> <img src="../img/relatorioo.png" alt="" width="200px"></center>

        </div>
        <div class="col-2">

        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm" id="pesquisaRelatorio">


            <form action="">
                <div class="form-group">
                    <label for="">Pesquisar motorista ou veículo para obter histórico de relatórios:</label>
                    <input type="hidden" value="3" name="opcao">
                    <input type="text" class="form-control" id="busca" name="busca" placeholder="Digita nome de motorista ou veículo para pesquisar">
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Cavalo</th>
                    <th scope="col">Carreta</th>
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Link</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if (!isset($_GET['busca'])) {
                ?>
                    <tr colspan="6">
                        <td>Digite algo para pesquisar..</td>
                    </tr>
                    <?php
                } else {

                    
                    $pesquisa = $_GET['busca'];

                    $sql = "SELECT * FROM `tbchecklist` 
                    WHERE `motorista` LIKE '%$pesquisa%' 
                    OR `placa_c` LIKE '%$pesquisa%' 
                    OR `placa_r` LIKE '%$pesquisa%'"; 
                    
                    
                    $resultado = mysqli_query($conexao, $sql);

                    $contaRegistros = mysqli_num_rows($resultado);

                    // echo $contaRegistros;

                    if ($contaRegistros <= 0) {
                    ?>
                        <tr colspan="6">
                            <td>Nenhum resultado encontrado.</td>
                        </tr>
                        <?php
                    } else {
                        while ($dados = $resultado->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $dados['motorista']; ?></td>
                                <td><?php echo $dados['placa_c']; ?></td>
                                <td><?php echo $dados['placa_r']; ?></td>
                                <td><?php echo $dados['DATA']; ?></td>
                                <td><?php echo $dados['hora']; ?></td>
                                <td><a href="../controle/pdf.php?id=<?php
                                echo $dados['idChecklist'];
                                ?>" target="_blank">Download</a></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>


                <?php
                }
                ?>


            </tbody>


        </table>
    </div>
</div>