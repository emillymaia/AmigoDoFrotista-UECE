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
    <section>
        <!-- Loguim -->
        <div class="container" id='principal'>
            <div class="row-sm"><br></div>
            <div class="row">
         <!--       <div class="col-sm">

                </div> -->
                <div class="col-sm">

                    <form action="controle/logar.php" method="POST">
                        <img src="img/Logo-Rod.png" alt="" width="100%">
                        <div class="form-group">
                            <label for="exampleInputEmail1">CPF</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Somente números" required>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
                        </div>
                        <span><a href="#"><center>Nova conta</center></a></span><br>
                        <!-- <button type="submit" class="btn btn-primary">Criar Conta</button> -->
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Entrar</button>
                    </form>
                </div>
 <!--               <div class="col-sm">

                </div> -->
            </div>
        </div>

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

















    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>