<!DOCTYPE HTML>
<html lang="pt-br">

<head>
  <!--
          bloquinho de reclamações
- projeto não aparece com a div do flyer e vice-versa
- fale conosco tá doidão de vez
- navbar funciona quando quer e as letras tão muito piticas pro meu astigmatismo
- a imagem do começo não aparece com o texto do começo e vice-versa
- obs: o coiso de conexão é sobre o php, fica tranquila que eu vou mexer nessa parte de inserir os dados no banco
é isso 🥰 desde as 11h20 mexendo aqui

   -->
  <meta charset="utf-8">
  <title>Ayoike</title>
  <link href="./src/style.css" rel="stylesheet" type="text/css">
  <script src='./src/script.js' type='text/javascript'></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <link rel="shortcut icon" href="./img/logonavbar.svg" type="image/x-icon">
</head>

<body>

<?php
include 'conexao.php';
?>
  <!-- -->
  <nav id="navbar" class="navbar navbar-expand-sm">
    <div class="container-fluid">



      <div class=" collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          <li style="margin-left: 400px;"><a href="#home">Home </a></li>

          <li class="mx-2 nav-item"><a href="#ayoike">A AyoiIke</a></li>
          <li class="mx-2 nav-item"><a href="#projetos">Projetos</a></li>
          <li class="mx-2 nav-item"><a href="#contato">Contato</a></li>

        </ul>



        <div class="form-check form-switch" style="margin-top: 2px;;">
          <input class="form-check-input " type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
          <label class="form-check-label" for="flexSwitchCheckChecked"></label>

        </div>

      </div>
    </div>

    </div>
    </div>
  </nav>
  <img src="./img/wave1.png" style="width:100%;" id="home">
  <img src="./img/uniao.svg">
  <p style="text-align: center; width: 744px;">AyoIke é fruto de trabalho em equipe com total responsabilidade, luta, liberdade, criatividade e segurança.
    Com projetos incríveis e missões que impulsionam sucesso e protagonismo!</p>

  <!-- A AYOIKE-->
  <img src="./img/wave2.png" style="width:100%;">
  <img src="./img/ayoike.svg" style="width:100%;" id="ayoike">
  <h2 style="text-align: center;">Nosso Time</h2>
  <img src="./img/FOTO EM GRUPO TCM 1.png" style="width:100%;">
  <img src="./img/wave3.png" style="width:100%;">
  <h2 style="text-align: center;" id="projetos">Projetos</h2>
  <br />
  <br />

  <!-- PROJETOS-->
  <div>
    <div class="flamboyant" style="position: fixed; width: 650px; text-align:right;">
      <img src="./img/Flyer Restaurante 2.png">
    </div>
    <article style="margin-left: 45%; margin-bottom:30%;width:440px;">
      <h2 style="font-weight: bold;">Restaurante Flamboyant</h2>
      <section>
        <h3>Restaurante</h3>
        Flamboyant é um restaurante vegano criado com o intuito de promover uma
        alimentação vegana saudável, responsável e acessível. Foi idealizado por
        Wellington Cidade, um empreendedor que visitou as Ilhas de Madagascar e
        se encantou com a vegetação do local, principalmente com uma árvore chamada Flamboyant.
      </section>
      <section>
        <h3>Contato</h3>
        Ele teve a ideia de reinventar o mercado alimentício de forma modernizada
        e eficiente, entrando em contato com a nossa startup.
      </section>
      <section>

        <h3>Sobre o Desenvolvimento</h3>
        Nosso projeto baseou-se na melhoria do atendimento
        e controle de pedidos de forma inteligente, tecnológica e ética.
        O sistema conta com cadastro e consulta de clientes e produtos, além de delivery e foi desenvolvido em C#.
      </section>
    </article>
  </div>



  <img src="./img/wave2.png" style="width:100%;">
  <br />
  <br />
  <br />
  <!-- Contato-->
  <h2>Fale conosco!</h2>

  <div id="contato"  class="container-fluid">
    <div class="row">
     
      <form method="post" action="mandarmensagem.php" name="logon">
     
				
        <label for="txtnome">Qual seu nome?</label>
        <input name="txtnome" type="text" class="form-control input" required id="nome">
     		
      
      
  
        <label  for="txtemail">Seu melhor e-mail:</label>
        <input name="txtemail" type="email" class="form-control" required id="email">
      
    

    
        <label for="txtmensagem">Nos conte algo! (Digite sua mensagem)</label>
        <textarea rows="5" name="txtmensagem" type="text" class="form-control" required id="mensagem"></textarea>

        <button type="submit" class="btn btn-custom">Enviar</button>
      </form>
      
    </div>
  </div>

 <footer style="background-color: #001C55; color:#FFF;">
    <h3 style="font-style:italic;">Social</h3>
    <p style="text-align: right;">@ Copyright - All rights reserved. </p> <br /> <br /> <br />
  </footer>


</body>

</html>