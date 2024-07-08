<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="indexCss.css">
  <title>Home Page</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
  rel="stylesheet">
  
</head>

<body>
  <header>
    <div id="div_header">
      <img src='imgs/logonobg.png' alt=''>
      <ul id="ul_header">
        <li><a href="estabelecimentoPage.html">Seja nosso parceiro!</a></li>
        <li><a id="cadastro" href="#">Cadastrar</a></li>
        <li><a href="#">Entrar</a></li>
      </ul>
    </div>
  </header>

  <div id="blur">
  </div>

  <div id='div_central'>
    <div id='card_cadastro'>
      <div id='cabecalho'>
        <div id='la_ele'><img id='logo_noform' src='imgs/logo_cortado.png' alt=''></div>
        <div id='X'>
          <a id='botaoX' href='index.php'><img id='imgX' src='imgs/x.png' alt=''></a>
        </div>
      </div>
      <hr>
      <div id='div_formulario'>
        <form id='formulario' method='post' action='../controller/processa.php' onsubmit="return consultaCampos()">
          <label class='text_card' for='nome'>*Nome:</label>
          <br>
          <input id= "input1"class='entrada' type='text' name='nome' value=""><br>
          <br>
          <label class='text_card' for='cpf'>*CPF:</label>
          <br>
          <input id= "input2" class='entrada' type='text' name='cpf' value=""><br>
          <br>
          <label class='text_card' for='dataNascimento'>*Data de nascimento:</label>
          <br>
          <input id= "input3" class='entrada' type='text' name='dataNascimento' value=""><br>
          <br>
          <label class='text_card' for='numCelular'>*Numéro de celular:</label>
          <br>
          <input id= "input4" class='entrada' type='number' name='numCelular' value=""><br>
          <br>
          <label class='text_card' for='email'>*E-mail:</label>
          <br>
          <input id= "input5" class='entrada' type='text' name='email' value="">
          <br>
          <label class='text_card' for='pw'>*Senha:</label>
          <br>
          <input id= "input6" class='entrada' type='password' name='pw' value=""><br>
          <br>
          <input class='entrada' type='hidden' name='id' value='$idCliente'><br>
          <input class='entrada' type='hidden' name='op' value='cadastrarCliente'><br>
          <div id='div_botao'>
            <input class='butao' name='cadastro' type='submit' value='Realizar o cadastro'>
          </div>
        </form>
      </div>
    </div>
  </div>

  <ul class="gallery">
    <li style="background: #f44336;"></li>
    <li style="background: #744700;"></li>
    <li style="background: #ce7e00;"></li>
    <li style="background: #8fce00;"></li>
    <li style="background: #2986cc;"></li>
    <li style="background: #16537e;"></li>
    <li style="background: #6a329f;"></li>
    <li style="background: #c90076;"></li>
    <li style="background: #b4a7d6;"></li>
    <li style="background: #f28482;"></li>
  </ul>

  <div id='div-about'>
    <div id='about-text'>
      <h1>Sobre nos</h1>
      <hr>
      <p>Aqui é o melhor lugar para você fazer as reservas dos seus lugares favoritos! Seja pra um aniversário, comemoração, jantar romântico e seja qualquer outra ocasião. <br> 
      Ou se você está cansado da mesmisce, aqui tem vários estabelecimentos a se conhecer; casas de festas, bares, restaurantes, cafeterias e muito mais!</p>
    </div>
  </div>



  <div class="center">
    <div class="property-card">
      <a href="#">
        <div class="property-image">
          <div class='card-img'>
            <img class="property-image" src="imgs/fundo.jpeg" alt="Fuga">
            <div class="property-image-title">
            </div>
          </div>
        </div>
      </a>
      <div class="property-description">
        <h5> Fuga Bar - Cais Embarcadero </h5>
        <br>
        <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.</p>
      </div>
    </div>

    <div class="property-card">
      <a href="#">
        <div class="property-image">
          <div class='card-img'>
            <img class="property-image" src="imgs/severina.png" alt="Severina">
            <div class="property-image-title">
            </div>
          </div>
        </div>
      </a>
      <div class="property-description">
        <h5> Severina </h5>
        <br>
        <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.</p>
      </div>
    </div>

    <div class="property-card">
      <a href="#">
        <div class="property-image">
          <div class='card-img'>
            <img class="property-image" src="imgs/wills.png" alt="Wills">
            <div class="property-image-title">
            </div>
          </div>
        </div>
      </a>
      <div class="property-description">
        <h5> Wills Bar </h5>
        <br>
        <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.</p>
      </div>
    </div>


    <div class="property-card">
      <a href="#">
        <div class="property-image">
          <div class='card-img'>
            <img class="property-image" src="imgs/20barra9.png" alt="20/9">
            <div class="property-image-title">
            </div>
          </div>
        </div>
      </a>
      <div class="property-description">
        <h5>20/9</h5>
        <br>
        <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.</p>
      </div>
    </div>

    <div class="property-card">
      <a href="#">
        <div class="property-image">
          <div class='card-img'>
            <img class="property-image" src="imgs/canto.png" alt="Canto bar">
            <div class="property-image-title">
            </div>
          </div>
        </div>
      </a>
      <div class="property-description">
        <h5>Canto Bar</h5>
        <br>
        <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.</p>
      </div>
    </div>

    <div class="property-card">
      <a href="#">
        <div class="property-image">
          <div class='card-img'>
            <img class="property-image" src="imgs/canto.png" alt="Canto bar">
            <div class="property-image-title">
            </div>
          </div>
        </div>
      </a>
      <div class="property-description">
        <h5>Canto Bar</h5>
        <br>
        <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.</p>
      </div>
    </div>

    <div class="property-card">
      <a href="#">
        <div class="property-image">
          <div class='card-img'>
            <img class="property-image" src="imgs/canto.png" alt="Canto bar">
            <div class="property-image-title">
            </div>
          </div>
        </div>
      </a>
      <div class="property-description">
        <h5>Canto Bar</h5>
        <br>
        <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.</p>
      </div>
    </div>

    <div class="property-card">
      <a href="#">
        <div class="property-image">
          <div class='card-img'>
            <img class="property-image" src="imgs/canto.png" alt="Canto bar">
            <div class="property-image-title">
            </div>
          </div>
        </div>
      </a>
      <div class="property-description">
        <h5>Canto Bar</h5>
        <br>
        <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.</p>
      </div>
    </div>
  </div>

  <footer>
  </footer>

<script src="js/funcoes.js"></script>
</body>
</html>