<!DOCTYPE HTML>
<html lang="pt-br">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="author" content="Giovanna Alves (Gica) e Valentina Prado (Valen)" />
<meta name="description" content="Site em PHP da Startup AyoIke - Projeto TCM 2ºMOD - ETEC BASILIDES" />


<title>Ayoike 🇧🇷</title>

<!oiu gente, espero que dê tudo certo, vou tentar ajudar ao máximo mesmo que de longe
O contato funciona, arrumei as fontes, nome dos arquivos e organizei as tags meta
FALTA: alinhar as divs e responsividade e pronto uhuuu !>
<head>
  <link href="style.css" rel="stylesheet" type="text/css">
  <script src='script.js' type='text/javascript'></script>

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
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-4">
          <a class="navbar-brand" href="#"><img src="./img/lgonavbar.svg"></a>
          <li style="margin-left: 500px;"><a href="#home">Home </a></li>

          <li class="mx-2 nav-item"><a href="#ayoike">A AyoiIke</a></li>
          <li class="mx-2 nav-item"><a href="#projetos">Projetos</a></li>
          <li class="mx-2 nav-item"><a href="#contato">Contato</a></li>

        </ul>


        <img src="./img/brpt.svg">
        <label class="switch">
          <input type="checkbox">
          <div class="slider"></div>
        </label>

        <img src="./img/en.svg">
      </div>
    </div>

  </nav>
  <img src="./img/wave1.png" style="width:100%; top:5px" id="home">
  <div><img src="./img/uniao.svg"></div>

  <p style="text-align:center; width: 744px;margin-left: 150px;padding-left: 150px;padding-bottom:100px;">AyoIke é fruto de trabalho em equipe com total responsabilidade, luta, liberdade, criatividade e segurança.
    Com projetos incríveis e missões que impulsionam sucesso e protagonismo!</p>

  <!-- A AYOIKE-->
  <img src="./img/wave2.png" style="width:100%;">
  <img src="./img/ayoike.svg" style="width:100%;" id="ayoike">
  <h2 style="text-align: center;" class="titulo">Nosso Time</h2>
  <img src="./img/FOTO EM GRUPO TCM.jpg" style="width:100%;">
  <img src="./img/wave3.png" style="width:100%;">

  <!-- PROJETOS-->
  <h2 style="text-align: center;" class="titulo" id="projetos">Projetos</h2>

  <br />
  <br />
  <div>
    <div class="flamboyant">
      <br />
      <br />
      <br />
      <img src="./img/Flyer Restaurante 2.png">
      <img src="./img/Logo Restaurante Flamboyant (1) 1.svg">
    </div>
    <div style="float:right;width:440px;">
      <article>
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
  </div>
  <img src="./img/wave2.png" style="width:100%;">
  <br />
  <br />
  <br />

  <!-- Contato-->
  <h2 class="titulo">Fale conosco!</h2>
  <br />
  <br />
  <br />
  <div style="float: left;"><img src="./img/contact.svg"></div>
  <div id="contato" class="container-fluid">
    <div class="row">

      <form method="post" action="mandarmensagem.php" name="logon">

        <br />
        <br />
        <br />

        <label for="txtnome">Qual seu nome?</label>
        <input name="txtnome" type="text" class="form-control input" required id="nome" style="border: 1px solid #000000;box-shadow: -4px 4px 0px #000000;">


        <br />
        <br />

        <label for="txtemail">Seu melhor e-mail:</label>
        <input name="txtemail" type="email" class="form-control" required id="email" style="border: 1px solid #000000;
box-shadow: -4px 4px 0px #000000;">


        <br />
        <br />
        <label for="txtmensagem">Nos conte algo! (Digite sua mensagem)</label>
        <textarea rows="5" name="txtmensagem" type="text" class="form-control" required id="mensagem"></textarea>

        <button type="submit" class="btn" style="border: 1px solid #000000;box-shadow: -4px 4px 0px #000000; float:right; background-color:#FFF
">Enviar</button>
      </form>

    </div>
  </div>
  <!--gambiarra pra não ficar embaixo do footer -->
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <footer style="background-color: #001C55; color:#FFF;">
    <h3 style="font-style:italic;">Social</h3>
    <p>

      <a href="https://www.linkedin.com/in/ayoike-tecnologia-b2104a214" target="_blank"><img src="./img/linkedin.svg"></a>
      <a href="https://github.com/projetotcm" target="_blank"><img src="./img/githubo.svg"></a>
      <a href="https://www.instagram.com/ayoikeoficial/" target="_blank"><img src="./img/instagram.svg"></a>
      <a href="https://www.facebook.com/Ayoike-101002268858420/?ref=pages_you_manage" target="_blank"><img src="./img/facebook.svg"></a>
    <p style="text-align: right;">@ Copyright - All rights reserved. </p>
  </footer>


</body>

</html>