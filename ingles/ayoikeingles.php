<!DOCTYPE HTML>
<html lang="en">

<head>


   
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
        <a class="navbar-brand" href="#"> <img src="./img/logonavbar.svg" type="image/x-icon"></a></li><!-- logo -->
          <li style="margin-left: 400px;"><a href="#home">Home </a></li>

          <li class="mx-2 nav-item"><a href="#ayoike">The AyoiIke</a></li>
          <li class="mx-2 nav-item"><a href="#projetos">Projects</a></li>
          <li class="mx-2 nav-item"><a href="#contato">Contact</a></li>

        </ul>

        

        <div class="form-check form-switch" style="margin-top: 2px;;">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
          <label class="form-check-label" for="flexSwitchCheckChecked"></label>

        </div>
    
      </div>
    </div>

    </div>
    </div>
  </nav>
  <img src="./img/wave1.png" style="width:100%;" id="home">
  <img src="./img/uniao.svg">
  <p style="text-align: center; width: 744px;">Ayoike is made of team work with total responsibility, strength, freedom, creativity and security. 
With amazing projects and missions that impulse success and leadership!</p>

  <!-- A AYOIKE-->
  <img src="./img/wave2.png" style="width:100%;">
  <img src="./img/ayoikeingles.png" style="width:100%;" id="ayoike">
  <h2 style="text-align: center;">Our Team</h2>
  <img src="./img/FOTO EM GRUPO TCM 1.png" style="width:100%;">
  <img src="./img/wave3.png" style="width:100%;">
  <h2 style="text-align: center;" id="projetos">Projects</h2>
  <br />
  <br />
   
<!-- PROJETOS-->
<div>
<div class="flamboyant" style="position: fixed; width: 650px; text-align:right;">
      <img src="./img/Flyer Restaurante 2.png">
    </div>
<article style="margin-left: 45%; margin-bottom:30%;width:440px;">
      <h2 style="font-weight: bold;">Flamboyant Restaurant</h2>
      <section>
        <h3>The Restaurant</h3>
      
Flamboyant is a vegan restaurant created with the purpose of promoting a healthy, responsible and accesible vegan alimentation.
It was idealized by Wellington City, an entrepeneur that visited the Madagadcar Island and fell in love with local vegetation, 
mostly with a tree called Flamboyant.
      </section>
      <section>
        <h3>Contact</h3>
        He had the idea of reinventing the food market in a modern and efficent way, 
contacting our startup.
      </section>
      <section>

        <h3>The Development</h3>
        Our project was based on the attendance upgrade and better order control in a smart, technologic and ethical way.
The system counts with a clients and products registration and consult, besides the delivery. It was developed in C#. 
      </section>
    </article>
</div>


   
  <img src="./img/wave2.png" style="width:100%;">
  <br />
  <br />
  <br />
  <!-- Contato-->
  <h2>Contact Us!</h2>

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