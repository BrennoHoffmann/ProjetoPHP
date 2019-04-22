<?php
$usuario = ["nome"=>"Brenno", "sobrenome"=>"Hoffmann"];
$produto = ["nome"=>"produto x", "preço"=>"50 pila parceiro", "descrição"=>"Essa é a descrição"]
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Loja</title>
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Lojaaaaaaa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
      aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Parcerias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
      </ul>
      <span class="navbar-text">
        <?php
        echo "Olá ". $usuario['nome'];
        ?>
      </span>
    </div>
  </nav>
</header>

<body>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Pague mais barato no produto que você merece !</h1>
      <p class="lead">Ninguém suporta pagar tão caro em roupa, por isso aqui tudo é barato, só não é de graça porque eu
        preciso comer.</p>
    </div>
  </div>
  <!-- Produtos -->
  <div class="card-deck">
    <div class="card" style="width: 14rem;">
      <img src="imagens/camisaBranca.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Camisa</h5>
        <p class="card-text">Camisa básica para todos os dias</p>
        <a href="#" class="btn btn-primary"><?php echo $produto['preço']; ?></a>
      </div>
    </div>
    <div class="card" style="width: 14rem;">
      <img src="imagens/calça.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Calça Jeans</h5>
        <p class="card-text">Calsa Jeans para todos os dias</p>
        <a href="#" class="btn btn-primary">Comprar</a>
      </div>
    </div>
    <div class="card" style="width: 14rem;">
      <img src="imagens/tenis.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tênis</h5>
        <p class="card-text">Tênis básico para todos os dias</p>
        <a href="#" class="btn btn-primary">Comprar</a>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4"></div>
    </div>
  </div>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>