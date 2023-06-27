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
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="estrutura.php">Início/</a></li>
        <li class="breadcrumb-item"><a href="produtos.php">Doces/</a></li>
        <li class="breadcrumb-item active" aria-current="page">Algodão Doce no Pote</li>
      </ul>
    </nav>

    <section class="container">

        <article class="row produtos-compra">
        <figure class="col-md-7 mb-3">
          <img src="img/algodao.jpg" class="img-fluid">
        </figure>

        <section class="col-md-5 mb-3 d-flex flex-column justify-content-around">
          <article class="produtos-conteudo">
            <h1>Algodão doce no Pote - <br> 400ml</h1>
            <p>
                <br>
                Combinando a nostalgia do algodão doce com a praticidade de um pote, nossa sobremesa é a escolha perfeita para satisfazer seu desejo por doces. Cada pote é repleto de algodão doce macio e saboroso, disponível em uma variedade de cores e sabores para atender a todos os gostos.
            </p>
          </article>

          <article class="produtos-preco">
           

            <strong>
              R$ 8,50
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
                  <option>Morango c/ Marshmallow</option>
                  <option>Baunilha c/ Marshmallow</option>
                  <option>Chiclete c/ Marshmallow</option>
                  <option>Morango c/ Suspiro</option>
                  <option>Baunilha c/ Suspiro</option>
                  <option>Chiclete c/ Suspiro</option>
                  <option>Morango c/ Goma</option>
                  <option>Baunilha c/ Goma</option>
                  <option>Chiclete c/ Goma</option>
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