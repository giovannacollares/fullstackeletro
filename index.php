<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Eletro</title>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!--css-->
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/index.css">
    <!--fontes-->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <!--icones-->
    <script src="https://kit.fontawesome.com/0d3f1f7bd2.js" crossorigin="anonymous"></script>
</head>
<body>
<!--barra de navegação-->
<?php 
include "./php/includes/nav.html";
?>

<!--carrossel de imagens-->
    <div id="indexcarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./imagens/index/carousel2.png" alt="Cozinha">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./imagens/index/carousel7.png" alt="Utensílios de cozinha">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./imagens/index/carousel.png" alt="Eletrodomésticos">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./imagens/index/carousel3.png" alt="Cozinha">
          </div>
        </div>
        <a class="carousel-control-prev" href="#indexcarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#indexcarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>


<!--sessão ofertas do dia-->
<section class="promodia">
  <div class="container-fluid promobg">
    <h1>Ofertas do Dia</h1>
  </div>
      <div class="row promos">
        <div class="col-sm-3 promocard">
          <div class="card promobox">
            <div class="card-body">
              <img src="./imagens/index/batedeiraoster.jpg" alt="Batedeira Planetária Oster">
              <p class="card-text descricao">Batedeira Planetária Oster - 110V</p><br>
              <p class="card-text preco"><strike>R$ 559,89</strike></p>
              <p class="card-text text-danger precofinal">R$ 398,49</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3 promocard">
          <div class="card promobox">
            <div class="card-body">
              <img src="./imagens/index/torradeiranostalgia.jpg" alt="Torradeira Good Taste Retrô Nostalgia">
              <p class="card-text descricao">Torradeira Good Taste Nostalgia - 110V</p>
              <p class="card-text preco"><strike>R$ 389,90</strike></p>
              <p class="card-text text-danger precofinal">R$ 228,39</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3 promocard">
          <div class="card promobox">
            <div class="card-body">
              <img src="./imagens/index/pipoqueiranostalgia.jpg" alt="Pipoqueira Com Bowl Nostalgia">
              <p class="card-text descricao">Pipoqueira com Bowl Nostalgia - 110V.</p>
              <p class="card-text preco"><strike>R$ 239,90</strike></p>
              <p class="card-text text-danger precofinal">R$ 182,99</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  
<!--sessão com card de sobre nós-->
    <section class="sobre">
      <div class="container sobrebg">
        <img src="./imagens/index/bannersobre.png">
      </div>
    </section>

<!--footer-->
<?php 
include "./php/includes/footer.html";
?>

</body>
</html>