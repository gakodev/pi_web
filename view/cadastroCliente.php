<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="homePageEstilo.css">
    <title>Home Page</title>
</head>
<body>

<header>
    <div id="div_header">
        <h1 id="logo"><img src="" alt=""></h1>
        <ul id="ul_header">
        <li><a href="#">Seja nosso parceiro!</a></li>
        <li><a href="#">Cadastrar</a></li>
        <li><a href="#">Entrar</a></li>
        </ul>
    </div>
</header>


<div id='under_header'>
    
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

<script>
const slider = document.querySelector('.gallery');
const items = document.querySelectorAll('.gallery li');
const itemWidth = items[0].offsetWidth + 16; 
let currentIndex = 0;

function moveCarousel() {
    currentIndex = (currentIndex + 1) % items.length; 
    const scrollLeft = currentIndex * itemWidth;
    slider.scrollTo({
        left: scrollLeft,
        behavior: 'smooth'
    });
    setTimeout(moveCarousel, 2000);
}
// Inicia a animação automática
moveCarousel();
</script>

<?php
/*$operacao = $_REQUEST["op"];
    if($operacao=="alterarCliente") {
        include "../controller/ClienteController.php";
        $res = ClienteController::resgataCliente($_REQUEST["idCliente"]);
        $qtd = $res->rowCount();
        $row = $res->fetch(PDO::FETCH_OBJ);
        $idCliente = $row->idCliente;
        $nome = $row->nome;
        $cpf = $row->cpf;
        $cnpj = $row->cnpj;
        $dataNascimento = $row->dataNascimento;
        $numCelular = $row->numCelular;
        $email = $row->email;
        $operacao = "alterarCliente";
    }   else {
        $idCliente = "";
        $nome = "";
        $cpf = "";
        $dataNascimento = "";
        $numCelular = "";
        $email = "";
        $operacao = "cadastrarCliente";
    }
    
print "<div id='form_cliente'>";
print "<form id='formulario' method='post' action='../controller/processa.php'>";
print "<label for='nome'>nome:</label>";
print "<input class='entrada' type='text' name='nome' value=".$nome."><br>";
print "<label for='cpf'>cpf:</label>";
print "<input class='entrada' type='text' name='cpf' value =".$cpf."><br>";
print "<label for='dataNascimento'>data de nascimento:</label>";
print "<input class='entrada' type='text' name='dataNascimento' value=".$dataNascimento."><br>";
print "<label for='numCelular'>NÚMERO DE CONTATO:</label>";
print "<input class='entrada' type='number' name='numCelular' value=".$numCelular."><br>";
print "<label for='email'>E-MAIL:</label>";
print "<input class='entrada' type='text' name='email' value=".$email."><br>";
print "<input class='entrada' type='hidden' name='id' value='$idCliente'><br>";
print "<input class='entrada' type='hidden' name='op' value='$operacao'><br>";
print "<input class='entrada' class='butao' type='submit' value = '$operacao'>";
print "</form>";
print "</div>";
*/
?>

<div id="primeira_linha">

<div class="center">
    
  <div class="property-card">
    <a href="#">
      <div class="property-image">
        <div  id="img1">
        <img  class="property-image" src="imgs/fundo.jpeg" alt="Fuga">
        <div class="property-image-title">
        </div>
      </div></div></a>
    <div class="property-description">
      <h5> Fuga Bar - Cais Embarcadero </h5>
      <br>
      <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.</p>
    </div>
    <a href="#">
      <div class="property-social-icons">
        <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
      </div>
    </a>
  </div>

  <div class="property-card">
    <a href="#">
      <div class="property-image">
        <div id="img2">
        <img class="property-image" src="imgs/severina.png" alt="Severina">
        <div class="property-image-title">
        </div>
      </div></div></a>
    <div class="property-description">
      <h5> Severina </h5>
      <br>
      <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.</p>
    </div>
    <a href="#">
      <div class="property-social-icons">
        <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
      </div>
    </a>
  </div>

  <div class="property-card">
    <a href="#">
      <div class="property-image">
        <div id="img3">
        <img class="property-image" src="imgs/wills.png" alt="Wills">
        <div class="property-image-title">
        </div>
      </div></div></a>
    <div class="property-description">
      <h5> Wills Bar </h5>
      <br>
      <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.</p>
    </div>
    <a href="#">
      <div class="property-social-icons">
        <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
      </div>
    </a>
  </div>


  <div class="property-card">
    <a href="#">
      <div class="property-image">
        <div id="img4">
        <img class="property-image" src="imgs/20barra9.png" alt="20/9">
        <div class="property-image-title">
        </div>
      </div></div></a>
    <div class="property-description">
      <h5>20/9</h5>
      <br>
      <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.</p>
    </div>
    <a href="#">
      <div class="property-social-icons">
        <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
      </div>
    </a>
  </div>

  <div class="property-card">
    <a href="#">
      <div class="property-image">
        <div id="img5">
        <img class="property-image" src="imgs/canto.png" alt="Canto bar">
        <div class="property-image-title">
        </div>
      </div></div></a>
    <div class="property-description">
      <h5>Canto Bar</h5>
      <br>
      <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.</p>
    </div>
    <a href="#">
      <div class="property-social-icons">
        <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
      </div>
    </a>
  </div>

  <div class="property-card">
    <a href="#">
      <div class="property-image">
        <div id="img5">
        <img class="property-image" src="imgs/canto.png" alt="Canto bar">
        <div class="property-image-title">
        </div>
      </div></div></a>
    <div class="property-description">
      <h5>Canto Bar</h5>
      <br>
      <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.</p>
    </div>
    <a href="#">
      <div class="property-social-icons">
        <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
      </div>
    </a>
  </div>
  </div>

 

</div>


<footer>
    
</footer>
  


</body>
</html>