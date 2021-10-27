<div class="titleVeiculo">
    <h2>Cadastre um novo veículo aqui.</h2>
</div>
<div class="container" id="containerVeiculo">
    <div class="row-sm"><br><br></div>
    <div class="row">
        <div class="col-sm" id="ajustarImgCaminhao"> 
            <img src="../img/caminhao.png" alt="" width="300px" class="caminhaoimg">

        </div>
        <div class="col-sm" id="cadastroVeiculo">


            <form action="../controle/salvarVeiculo.php" method="POST" class="formularioVeiculo">
                <div class="form-group">
                    <label for="exampleInputEmail1">Placa:</label>
                    <input type="text" class="form-control" id="placa" name="placa" placeholder="XXX0000 ou XXX0X00" required>

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Renavam:</label>
                    <input type="text" class="form-control" id="renavam" name="renavam" placeholder="somente numeros" required>
                </div>

                <button type="submit" class="btn btn-primary" id="botaoVeiculo" style="width: 40%;"> Cadastrar</button>
            </form>
        </div>
    </div>
</div>