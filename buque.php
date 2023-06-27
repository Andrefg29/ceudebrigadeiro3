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
        <li class="breadcrumb-item active" aria-current="page">Buque de Morango</li>
      </ol>
    </nav>
    <section class="container">

      <article class="row produtos-compra">
        <figure class="col-md-7 mb-3">
          <img src="img/buque.jpg" class="img-fluid">
        </figure>

        <section class="col-md-5 mb-3 d-flex flex-column justify-content-around">
          <article class="produtos-conteudo">
            <h1>Buque de Morango  - <br> 14 Unidades</h1>
            <p>
                <br>
                Surpreenda quem você ama com um presente único e delicioso: nosso buquê de morangos!
                <br>
                Cada morango fresco é selecionado a dedo e cuidadosamente disposto em um buquê elegante e sofisticado, criando uma apresentação incrível que agrada tanto aos olhos quanto ao paladar.
          </article>

          <article class="produtos-preco">
           

            <strong>
              R$99,90
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
                <label for="produtos-quantidade-itens">Cores</label>
                <select class="form-control" id="produtos-quantidade-itens">
                  <option>Rosa</option>
                  <option>Azul</option>
                  <option>Roxo</option>
                  <option>Amarelo</option>
                  <option>Verde</option>
                  <option>Preto</option>
                  <option>Branco</option>
                  <option>Laranja</option>
                  <option>Vermelho</option>
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