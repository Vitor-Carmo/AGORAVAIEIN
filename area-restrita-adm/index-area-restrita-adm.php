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
    <?php 
        include_once("valida-sentinela-adm.php");
    ?>
  <nav class="navbar navbar-light p-3 pl-5 " style="background-color: #E63946;">
    <a class="navbar-brand position-absolute">
      <img src="../img/logoSite.png" alt="">
    </a>


    <form class="form-inline col pl-1">
      <div class="row-10 col-11 d-flex align-items-center justify-content-center pl-1 ">
        <input class="form-control col-7 mr-sm-2 border-0 rounded-0 " type="search"
          placeholder="Pesquise os produto desejados!" aria-label="Pesquisar">
        <button class="btn btn-outline my-2 my-sm-0 btn-outline-azulMedio rounded-0 " type="submit">Encontrar</button>
      </div>
    </form>

    <div class="d-flex justify-content-between ">
      <img src="../img/iconUserRed.png " height="45px">
    </div>

    <div class="d-flex flex-column">
      <span class=" text-white border p-2"><strong>
          <font size="4px">Seja-Bem vindo, administrador</font>
        </strong></span>
        <button type="button" class="btn btn-outline-otoAzul p-1"><a href="../logout.php">Sair de sua conta
                </a></button>
        </div>
      
    </div>
  </nav>


  <nav class=" navbar navbar-light d-flex justify-content-around  border border-testezin "
    style="background-color: #E63946; color: white;">

    <h5><a href='index-area-restrita-adm.php'>Home</a></h5>
    
    
    <h5><a href="form-cadastro-produto.php"> Cadastrar produtos</a></h5>


  </nav>



  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="../img/camisaPromo.jpg" alt="Primeiro Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../img/iphonePromo.jpg" alt="Segundo Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../img/ps5Promo.jpg" alt="Terceiro Slide">
      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>

  <div class="row d-flex justify-content-center border border-azulMedio ">
    <img src="../img/araste2.jpg">
  </div>
  <br><br>



  <br><br>


  <nav class="navbar navbar-light  justify-content-center" style="background-color: #E63946;">

    <div class="col">
      <center>
        <p>
          <font color="white" size="5"><b> Nosso suporte </b></font>
        </p>

        <p>
          <font color="white" size="5"><a href="contato.php"><u> Entrar em contato via e-mail </u></font>
        </p>
      </center>
    </div>





  </nav>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</body>

</html>