<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>MINAS VALLEY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

body, html {
  height: 100%;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("img/bckp.jpg");
  min-height: 75%;
}

.menu {
  display: none;
}

</style>

<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  
  <div class="w3-display-middle w3-center">
      <img class="w3-image" src="img/logo/2.png">
  </div>

</header>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="https://minasvalley.netlify.app/"><img src="img/logo/2.png" width="150" height="26" alt="Minas Valley"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">Sobre nós</a></li>
          <li><a href="#redes">Nossas redes</a></li>
        </ul>
        <form class="navbar-form navbar-left" action="/action_page.php">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form> 
        <ul class="nav navbar-nav navbar-right">

        <?php

            if(isset($_SESSION["usu_id"])){

              echo "<li><a href='src/front-end/perfil.php'><span class='glyphicon glyphicon-user'></span> Perfil</a></li>";
              echo "<li><a href='src/back-end/logout.php'><span class='glyphicon glyphicon-user'></span> Logout</a></li>";
            }else{

              echo "<li><a href='src/front-end/signup.php'><span class='glyphicon glyphicon-user'></span> Cadastre-se</a></li>";
              echo "<li><a href='src/front-end/login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
            }

        ?>

        </ul>
      </div>
    </div>
  </nav>


<div class="w3-content w3-padding" style="max-width:1564px">

    <div class="w3-row-padding" id="about">
        <div class="w3-col l4 12"><br><br><br>
          <h1>Descubra as mais promissoaras Startups do Brasil e conecte-se a elas.</h1><br>
          <h4>A plataforma que veio para unir Startups, Colaboradores e Investidores tudo em um só lugar. Mergulhe neste novo mar de experiência conosco.</h4>
          <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</h4>
        </div>
        <div class="w3-col l8 12">
          <img src="img/ft1.jpg" class="w3-image" style="width:100%;">
        </div>
    </div>


  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Startups em Alta</h3>
    <a href="https://app.netlify.com/sites/minasvalley/overview">Ver mais>>></a>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Nubank</div>
        <img src="img/logs/nu.png" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Pic Pay</div>
        <img src="img/logs/pic.png" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Vindi</div>
        <img src="img/logs/vindi.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Rubrik</div>
        <img src="img/logs/rub.png" alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Slack</div>
        <img src="img/logs/slack.png" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Stripe</div>
        <img src="img/logs/stripe.png" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Wework</div>
        <img src="img/logs/wework.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">NIO</div>
        <img src="img/logs/nio.png" alt="House" style="width:99%">
      </div>
    </div>
  </div>

  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Ideias em Destaque</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/id/pag.jpg" style="width:100%">
      <h3>Pagamento por QR Code</h3>
      <p class="w3-opacity">Startup de Economia</p>
      <p>A Desenfila tem um sistema de hospedagem e de processamento das comandas na nuvem. O mercado Pago acessa essas informações, por meio do QR Code na comanda, e...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/id/robojpg.jpg" style="width:100%">
      <h3>Cachorro Robo</h3>
      <p class="w3-opacity">Startup de Robotica</p>
      <p>Se você é do tipo que acha que ter um bichinho de estimação da muito trabalho ou que não tem muito tempo para cuidar, essa nova ideia pode mudar o seu jeito de pensar...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/id/alo.png" style="width:100%">
      <h3>Alô, quem fala?</h3>
      <p class="w3-opacity">Startup de Dublagem</p>
      <p>O mercado de dublagem vem sofrendo muito com o momento atual devido a pandemia, causada pelo COVID-19. Nossos trabalho foram paralisado, pelo risco de trabalhar em um...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/id/casa.jpg" style="width:100%">
      <h3>Casa Automática</h3>
      <p class="w3-opacity">Startup de Automação Residencial</p>
      <p>A SmartHó vem com um novo produto para mudar como você fica em casa. Trazendo um produto para automatizar a maior parte de sua casa o jeito que você fica em casa nunca mais...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
  </div>

  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Popular entre os Investidores</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/inv/geekie.png" style="width:100%">
      <h3>Geekie</h3>
      <p class="w3-opacity">Startup de Ensino</p>
      <p>Fundada em 2011, a startup desenvolve soluções para ajudar instituiçoes de ensino no processo de criação de ações pedagógicas para cada aluno. Partindo da premissa que o processo...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/inv/life.png" style="width:100%">
      <h3>Life n' Roll</h3>
      <p class="w3-opacity">Startup de Ensino</p>
      <p>O primeiro ponto levantado pela Life n' Roll é que há 200 anos o ensino é o mesmo, o que leva a resultados desastrosos(40% dos alunos largam seus cursos de faculdade, por exemplo)...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/inv/app.png" style="width:100%">
      <h3>App Prova</h3>
      <p class="w3-opacity">Startup de Ensino</p>
      <p>A startup foi criada em Belo Horizonte em 2012 e tem como objetivo auxiliar em um dos principais desafior da jornada educacional de uma pessoa: as provas. Por meio da plaaforma criada pela empresa, alunos conseguem se preparar para...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/inv/case.png" style="width:100%">
      <h3>Case</h3>
      <p class="w3-opacity">Startup de Pré aceleração de startups</p>
      <p>A case vem com uma ideia inovadora para o ramo de startups. Com sua ideia ja encantou diversos investidores e já está cogitando ir para fora. Sua ideia inovadora faz com que novas startups recebam bem amais atenção que outras, saiba...</p>
      <p><button href="src/front-end/index.php" class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
  </div>
  
</div>



<footer class="w3-padding-32 w3-black w3-center w3-margin-top" id="redes">
    <h5>Nos siga em nossa redes sociais:</h5>
    <div class="w3-xlarge w3-padding-16">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
  </footer>

</body>
</html>
