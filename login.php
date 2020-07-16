<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/minhaEstilizacao.css">



    <script type="text/javascript" src="js/bootstrap.js"></script>

</head>

<body class="bg-corFundo">

    <nav class="navbar navbar-light p-0 pl-5 " style="background-color: #E63946;">
        <a class="navbar-brand position p-0">
            <img src="img/logoSite.png" alt="">
        </a>
    </nav>

    <div class="container-fluid d-flex justify-content-center">
        <div class="row">
            <div class="col">
                <br>
                <h4>
                    <center>Entre em sua conta</center>
                </h4>
                <br>
                <h5>
                    <center>Insira seus dados para realizar o login</center>
                </h5>
            </div>
        </div>
    </div>
    <br>

    <div class="container-fluid  d-flex justify-content-center ">
        <div class="row borderTeste border-azulMedio col-3 justify-content-center">
            <form name="cadastro-cliente" action="valida-login.php" method="POST">
                <center>

                    <form class="needs-validation" novalidate >
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Email</label>
                                <input type="text" class="form-control" id="validationCustom01" name="txtLogin"
                                    placeholder="Digite seu e-mail" required>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom03">Senha</label>
                                <input type="password" class="form-control" id="validationCustom03" name="txtSenha"
                                    placeholder="Digite sua senha" required>
                            </div>
                        </div>

                        <label for="validationCustom01">Você é:</label>
                        <br>
                        <input type='radio' name='perfil' value='1'>Administrador |
                        <input type='radio' name='perfil' value='2' checked>Cliente

                        <br><br>
                        <button class="btn btn-primary " type="submit">Entrar</button>

                    </form>



            </form>










        </div>

    </div>











































    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <br>
</body>

</html>