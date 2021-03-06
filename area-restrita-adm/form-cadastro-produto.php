<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/minhaEstilizacao.css">



    <script type="text/javascript" src="js/bootstrap.js"></script>

</head>

<body class="bg-corFundo">

    <nav class="navbar navbar-light p-0 pl-5 " style="background-color: #E63946;">
        <a class="navbar-brand position p-0">
            <img src="../img/logoSite.png" alt="">
        </a>
    </nav>
    <h1>Aqui é pra cadastrar produtos</h1>
    <div class="container-fluid d-flex justify-content-center">
        <div class="row">
            <div class="col">
                <br>
                <h4>
                    <center>Cadastro de produtos</center>
                </h4>
                <br>
                <h5>
                    <center>Insira abaixo os dados do produto</center>
                </h5>
            </div>
        </div>
    </div>
    <br>

    <div class="container-fluid  d-flex justify-content-center ">
        <div class="row borderTeste border-azulMedio col-5 justify-content-center">
            <form name="cadastrar-produto" action="cadastrar-produto.php" method="POST" enctype="multipart/form-data">   
                <center>

                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Descrição</label>
                                <input type="text" class="form-control" id="validationCustom01" name="txtDescricaoProd"
                                    required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom03">Valor</label>
                                <input type="text" class="form-control" id="validationCustom03" name="txtValorProd"
                                    required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom04">Quantidade em estoque</label>
                                <input type="text" class="form-control" id="validationCustom04" name="txtEstoque"
                                    required>
                                <div class="valid-feedback">
                                    Tudo certo!
                                </div>
                            </div>
                        </div>
                        <div class="form-row  ">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom05 ">Foto do produto</label>
                                <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required>

                            </div>
                        </div>

                        <button class="btn btn-primary " type="submit">Cadastrar</button>
                    </form>


                    <script>
                        // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
                        (function () {
                            'use strict';
                            window.addEventListener('load', function () {
                                // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
                                var forms = document.getElementsByClassName('needs-validation');
                                // Faz um loop neles e evita o envio
                                var validation = Array.prototype.filter.call(forms, function (form) {
                                    form.addEventListener('submit', function (event) {
                                        if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }
                                        form.classList.add('was-validated');
                                    }, false);
                                });
                            }, false);
                        })();
                    </script>
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