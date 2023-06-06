<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrinho de Compras - Céu de Brigadeiro - Um Horizonte de Doces</title>
    <link rel="stylesheet" href="css/carrinho.css">
    <link rel="stylesheet" href="css/navbar.css">
    <script src="https://kit.fontawesome.com/f87260a7c7.js" crossorigin="anonymous"></script>
  </head>

  <style>

    .fundopromo{
        background-image: url('img/promo/3.jpg');
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
  <body>
  <?php include ('navbar.html') ?>
    <div class="fundopromo"></div>


      <div class="tituloc">Seu Carrinho</div>
     
      <div class="principalcarrinho">
      <div class="carrinhoprod">
        <div class="produtoc" id="produto1">
          <img src="img/copo_felicidade.jpg" alt="Produto">
          <div class="excluirc" ><i class="fa-solid fa-circle-xmark" onclick="remover1();"></i></div>
          <div class="preco"><h2>R$<p id="precoprod">15.95</p></h2></div>
          <div class="tituprod"><h2>Copo da Felicidade - <br> 500ml</h2></div>
          <div class="descprod"><h2>Sabor: Morango/Chocolate</h2></div>
          <div class="qtdec">
            <button onclick="diminuir();"><i class="fa-solid fa-minus"></i></button>
            <h3 id="qtde">1</h3>
            <button onclick="somar();"><i class="fa-solid fa-plus"></i></button>
          </div>
        </div>

        <div class="produtoc" id="produto2">
          <img src="img/brownie.jpg" alt="Produto">
          <div class="excluirc" ><i class="fa-solid fa-circle-xmark" onclick="remover2()"></i></div>
          <div class="preco"><h2>R$<p id="precoprod2">12.50</p></h2></div>
          <div class="tituprod"><h2>Brownie Recheado - <br> 1 Unidade</h2></div>
          <div class="descprod"><h2>Sabor: Ovomaltine c/ Oreo</h2></div>
          <div class="qtdec">
            <button onclick="diminuir2();"><i class="fa-solid fa-minus"></i></button>
            <h3 id="qtde2">1</h3>
            <button onclick="somar2();"><i class="fa-solid fa-plus"></i></button>
          </div>
        </div>

        

        <a href="produtos.php" class="produtoc add"><i class="fa-solid fa-plus"></i></a>

      </div>

      <div class="carrinhototal">
        <h2>Pedido:</h2>
        <div class="linha" id="linha1"><div class="prodtotal"><p id="qtde3">1</p>Copo da Felicidade</div><div class="precot">R$<p id="total">15.95</p></div></div>
        <div class="linha" id="linha2"><div class="prodtotal"><p id="qtde4">1</p>Brownie Recheado </div><div class="precot">R$<p id="total2">12.50</p></div></div>
        <div class="linha"><div class="subtotal">Subtotal: </div><div class="precot">R$<p id="subtotal">31.90</p></div></div>
        <div class="linha"><div class="desconto">Desconto:</div><div class="precot">R$<p>0.00</p></div></div>
        <div class="linha"><div class="total">Total: </div><div class="precot">R$<p id="total4">31.90</p></div></div>
        
        <br>
        <button class="finalizar" onclick="pgto();">Finalizar Pedido</button>

      </div>
    </div>
              <script>

                function diminuir(){
                  
                  if( qtde.innerHTML > "0"){
                    qtde.innerHTML-=1
                    t = parseFloat(precoprod.innerHTML)*qtde.innerHTML
                  t = t.toFixed(2)
                  document.getElementById('qtde3').innerHTML = document.getElementById('qtde').innerHTML
                  total.innerHTML=t
                  subtotal.innerHTML = parseFloat(total.innerHTML)+parseFloat(total2.innerHTML)
                  total4.innerHTML = subtotal.innerHTML
                  subtotal.innerHTML = parseFloat(subtotal.innerHTML).toFixed(2)
                  total4.innerHTML = parseFloat(total4.innerHTML).toFixed(2)
                  }
                }
                

                function somar(){

                  qtde.innerHTML=parseInt(qtde.innerHTML)+1
                  t = parseFloat(precoprod.innerHTML)*qtde.innerHTML
                  t = t.toFixed(2)
                  total.innerHTML=t
                  document.getElementById('qtde3').innerHTML = document.getElementById('qtde').innerHTML
                  subtotal.innerHTML = parseFloat(total.innerHTML)+parseFloat(total2.innerHTML)
                  total4.innerHTML = subtotal.innerHTML
                  subtotal.innerHTML = parseFloat(subtotal.innerHTML).toFixed(2)
                  total4.innerHTML = parseFloat(total4.innerHTML).toFixed(2)
                }

                function diminuir2(){
                  
                  if( qtde2.innerHTML > "0"){
                    qtde2.innerHTML-=1
                    t = parseFloat(precoprod2.innerHTML)*qtde2.innerHTML
                  t = t.toFixed(2)
                  document.getElementById('qtde4').innerHTML = document.getElementById('qtde2').innerHTML
                  total2.innerHTML=t
                  subtotal.innerHTML = parseFloat(total.innerHTML)+parseFloat(total2.innerHTML)
                  total4.innerHTML = subtotal.innerHTML
                  subtotal.innerHTML = parseFloat(subtotal.innerHTML).toFixed(2)
                  total4.innerHTML = parseFloat(total4.innerHTML).toFixed(2)
                  }
                }
                

                function somar2(){
                  qtde2.innerHTML=parseInt(qtde2.innerHTML)+1
                  t = parseFloat(precoprod2.innerHTML)*qtde2.innerHTML
                  t = t.toFixed(2)
                  total2.innerHTML=t
                  document.getElementById('qtde4').innerHTML = document.getElementById('qtde2').innerHTML
                  subtotal.innerHTML = parseFloat(total.innerHTML)+parseFloat(total2.innerHTML)
                  total4.innerHTML = subtotal.innerHTML
                  subtotal.innerHTML = parseFloat(subtotal.innerHTML).toFixed(2)
                  total4.innerHTML = parseFloat(total4.innerHTML).toFixed(2)
                }

                function remover1(){
                  document.getElementById('produto1').style.display = "none";
                  document.getElementById('linha1').style.display = "none";
                  total.innerHTML=0
                  subtotal.innerHTML = parseFloat(total.innerHTML)+parseFloat(total2.innerHTML)
                  total4.innerHTML = subtotal.innerHTML
                  subtotal.innerHTML = parseFloat(subtotal.innerHTML).toFixed(2)
                  total4.innerHTML = parseFloat(total4.innerHTML).toFixed(2)
                }

                function remover2(){
                  document.getElementById('produto2').style.display = "none";
                  document.getElementById('linha2').style.display = "none";
                  total2.innerHTML=0
                  subtotal.innerHTML = parseFloat(total.innerHTML)+parseFloat(total2.innerHTML)
                  total4.innerHTML = subtotal.innerHTML
                  subtotal.innerHTML = parseFloat(subtotal.innerHTML).toFixed(2)
                  total4.innerHTML = parseFloat(total4.innerHTML).toFixed(2)
                }

                function pgto(){
                  document.getElementById('pgto').style.display = "block"
                }

                function remover6(){
                  document.getElementById('pgto').style.display = "none"
                }

              </script>

                <div class="pagamento" id="pgto">
                <div class="formadepgto">
                <div class="excluirpgto" ><i class="fa-solid fa-circle-xmark" onclick="remover6()"></i></div>
                  <h2>Selecione a Forma de Pagamento:</h2>
                  <div class="metodo">
                  <a href="pagamento.html"><div class="cartao"><i class="fa-regular fa-credit-card"></i><br>Cartão de<br> Crédito/Débito</div></a>
                  <a href="pix.html"><div class="pix"><i class="fa-brands fa-pix"></i><br>Pix</div></a>
                  </div>
                </div>
                </div>

  </body>
</html>