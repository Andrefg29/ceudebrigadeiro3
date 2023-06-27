<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Céu de Brigadeiro - Um Horizonte de Doces</title>

  <link href="css/responsivo.css" rel="stylesheet"> 
  <link rel="stylesheet" href="css/produto.css">
 <link rel="stylesheet" href="css/navbar.css">
    <link rel="icon" type="image/png" href="img/logo.png">
</head>

<body>

  <?php include ('navbar.html') ?>

  <main>
    <nav aria-label="breadcrumb" class="links">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="estrutura.php">Início/</a></li>
        <li class="breadcrumb-item"><a href="produtos.php">Doces/</a></li>
        <li class="breadcrumb-item active" aria-current="page">Brownie Recheado</li>
      </ol>
    </nav>

    <section class="container">

      <article class="row produtos-compra">
        <figure class="col-md-7 mb-3">
          <img src="img/brownie.jpg" class="img-fluid">
        </figure>

        <section class="col-md-5 mb-3 d-flex flex-column justify-content-around">
          <article class="produtos-conteudo">
            <h1>Brownie Recheado - <br> 1 Unidade</h1>
            <p>
                <br>
                Feito com ingredientes de alta qualidade e recheado com delicioso creme de avelã, nosso brownie é a escolha perfeita para saciar seu desejo por algo doce e indulgente. Com uma textura macia e suculenta, nosso brownie recheado é o equilíbrio perfeito entre um bolo e um chocolate cremoso.
          </article>

          <article class="produtos-preco">
           

            <strong>
              R$ 12,50
            </strong>

            <form action="carrinho.php">
              <div class="form-group">
                <label for="produtos-quantidade-itens">Quantidade</label>
                <select class="form-control" id="produtos-quantidade-itens">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>

              <div class="form-group">
                <label for="produtos-quantidade-itens">Sabores</label>
                <select class="form-control" id="produtos-quantidade-itens">
                  <option>Ninho c/ Oreo</option>
                  <option>Belga c/ Oreo</option>
                  <option>Ovomaltine c/ Oreo</option>
                  <option>Ninho c/ Kinder Bueno</option>
                  <option>Belga c/ Kinder Bueno</option>
                  <option>Ovomaltine c/ Kinder Bueno</option>
                  <option>Ninho c/ Chocolate</option>
                  <option>Belga c/ Chocolate</option>
                  <option>Ovomaltine c/ Chocolate</option>
                </select>
              </div>
<br>
              <button type="submit" class="btn btn-success col-md-12">Comprar</button>
            </form>
          </article>
        </section>

        </main>
<br><br><br>
<?php include('ultimospedidos.html') ?>

<br>
<?php include('footer.html') ?>

        <!-- Arquivos Bootstrap -->
        <script src="js/estrela.js"></script>
        <script src="./assets/js/popper.js"></script>
        <script src="./assets/js/bootstrap.js"></script>
</body>

</html>