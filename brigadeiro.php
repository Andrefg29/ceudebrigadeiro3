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
        <li class="breadcrumb-item active" aria-current="page">Combo de Brigadeiros</li>
      </ol>
    </nav>

    <section class="container">

      

      <article class="row produtos-compra">
        <figure class="col-md-7 mb-3">
          <img src="img/brigadeiro.jpg" class="img-fluid">
        </figure>

        <section class="col-md-5 mb-3 d-flex flex-column justify-content-around">
          <article class="produtos-conteudo">
            <h1>Combo de Brigadeiros - <br> 16 unidades</h1>
            <p>
                <br>
                Nossa caixa de 16 brigadeiros é a escolha perfeita para quem quer uma variedade de sabores e texturas. Com uma mistura de brigadeiros tradicionais e gourmet, você terá uma experiência incrível a cada mordida.
            </p>
          </article>

          <article class="produtos-preco">
           

            <strong>
              R$ 24,50
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
                  <option>Brigadeiro Oreo</option>
                  <option>Brigadeiro Meio Amargo</option>
                  <option>Brigadeiro ao Leite</option>
                  <option>Brigadeiro Ninho c/ Nutella</option>
                  <option>Brigadeiro Bicho de Pé</option>
                  <option>Brigadeiro Capuccino c/ Canela</option>
                  <option>Brigadeiro Dois Amores</option>
                  <option>Brigadeiro Churros</option>
                  <option>Brigadeiro Belga</option>
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