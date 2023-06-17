<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Céu de Brigadeiro - Um Horizonte de Doces</title>
    <link href="css/responsivo.css" rel="stylesheet"> 
    <link href="css/cardesprod.css" rel="stylesheet"> 
    <link href="css/promocao.css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>

.fundopromo{
    background-image: url('img/promo/2.jpg');
    width: 100%;
    height: 250px;
    color: #fff;
    display: flex;
    align-items: center;
    align-content: center;
    justify-content: center;
    justify-items: center;
}

    </style>
</head>
<body>
    <div class="principal">
        <?php include('navbar.html') ?>
        <div class="fundopromo"></div>
        <h1 class="titus">Produtos</h1>
       <br><br>
        <div class="divanuncio1" id="divanuncio1">

            <a href="brigadeiro.php"><div class="card">
                <div class="imgcard"><img src="img/brigadeiro.jpg"></div>
                <div class="textocard">
                    <h2>Combo Brigadeiros</h2>
                    <p>R$24,50</p>
                </div>
            </div></a>  

            <a href="copo_felicidade.php"><div class="card">
                <div class="imgcard"><img src="img/copo_felicidade.jpg"></div>
                <div class="textocard">
                    <h2>Copo da Felicidade</h2>
                    <p>R$15,90</p>
                </div>
            </div></a>

            <a href="algodao.php"><div class="card">
                <div class="imgcard"><img src="img/algodao.jpg"></div>
                <div class="textocard">
                    <h2>Algodão Doce - 400ml</h2>
                    <p>R$8,50</p>
                </div>
            </div></a>

            <a href="fondue.php"><div class="card">
                <div class="imgcard"><img src="img/fondue.jpg"></div>
                <div class="textocard">
                    <h2>Fondue - Pote com 500ml</h2>
                    <p>R$20,00</p>
                </div>
            </div></a>
            </div>

        </div>
        <div class="divanuncio1" id="divanuncio1">
            <a href="brownie.php"><div class="card">
                <div class="imgcard"><img src="img/brownie.jpg"></div>
                <div class="textocard">
                    <h2>Brownie Recheado</h2>
                    <p>R$12,50</p>
                </div>
            </div></a>  

            <a href="buque.php"><div class="card">
                <div class="imgcard"><img src="img/buque.jpg"></div>
                <div class="textocard">
                    <h2>Buque de Chocolate</h2>
                    <p>R$99,90</p>
                </div>
            </div></a>

            <a href="ovo.php"><div class="card">
                <div class="imgcard"><img src="img/ovinho.jpg"></div>
                <div class="textocard">
                    <h2>Ovo de Colher</h2>
                    <p>R$28,90</p>
                </div>
            </div></a>  

            <a href="cupcake.php"><div class="card">
                <div class="imgcard"><img src="img/cupcake.jpg"></div>
                <div class="textocard">
                    <h2>Mini Cupcake - 12un</h2>
                    <p>R$16,00</p>
                </div>
                </div></a>
    </div>
    <br>

    <h1>Promoções</h1>
    <div class="promocao">
        <a href="promocao30.php"><div class="p1">Produtos até<br>R$30</div></a> 
        <a href="promocao50.php"><div class="p2">Produtos até<br>R$50</div></a> 
        <a href="promocao100.php"><div class="p3">Produtos até<br>R$100</div></a> 
     </div>
<br>
    <h1>Últimos Pedidos</h1>

        <div class="divanuncio1" id="divanuncio1">

            <a href="brownie.php"><div class="card">
                <div class="imgcard"><img src="img/brownie.jpg"></div>
                <div class="textocard">
                    <h2>Brownie Recheado</h2>
                    <p>R$12,50</p>
                </div>
            </div></a>  

            <a href="buque.php"><div class="card">
                <div class="imgcard"><img src="img/buque.jpg"></div>
                <div class="textocard">
                    <h2>Buque de Chocolate</h2>
                    <p>R$99,90</p>
                </div>
            </div></a>

            <a href="ovo.php"><div class="card">
                <div class="imgcard"><img src="img/ovinho.jpg"></div>
                <div class="textocard">
                    <h2>Ovo de Colher</h2>
                    <p>R$28,90</p>
                </div>
            </div></a>  

            <a href="cupcake.php"><div class="card">
                <div class="imgcard"><img src="img/cupcake.jpg"></div>
                <div class="textocard">
                    <h2>Mini Cupcake - 12un</h2>
                    <p>R$16,00</p>
                </div>
                </div></a>

                <a href="copo_felicidade.php"><div class="card">
                    <div class="imgcard"><img src="img/copo_felicidade.jpg"></div>
                    <div class="textocard">
                        <h2>Copo da Felicidade</h2>
                        <p>R$15,90</p>
                    </div>
                    </div></a>
        </div>
        <br>

        <?php include('footer.html') ?>
    </div>
</body>
</html>