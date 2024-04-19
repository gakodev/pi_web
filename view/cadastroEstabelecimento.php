<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cadastroEstabelecimentoCss.css">
    <title>Home Page</title>
</head>

<body>

    <header>
        <div id="div_header">
            <img src='imgs/logonobg_laranja.png' alt=''>
            <ul id="ul_header">
                <li><a href="index.php"><img src="imgs/voltar.png" alt=""></a></li>
            </ul>
        </div>
    </header>

    <div id="total">
        <div id = "e"></div>
        <div id = "d">
            <div id= "texto">
                <h1>Aqui você encontra melhores resultados <br>
                seja nosso parceiro!</h1>
            </div>
            <div id= "div_botoes">
            <div id="workarea">
  <div class="position">
    <div class="svg-wrapper">
      <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
        <rect id="shape" height="40" width="150" />
        <div id="text">
          <a href=""><span class="spot"></span>Fazer cadastro!</a>
        </div>
      </svg>
    </div>
    <!--Next button -->
    <div class="svg-wrapper">
      <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
        <rect id="shape" height="40" width="150" />
        <div id="text">
          <a href=""><span class="spot"></span>Entrar</a>
        </div>
      </svg>
    </div>
    

            </div>
        </div>
    </div>

    <!--<div id='div_form'>
        <form id='formulario' method='post' action='../controller/processa.php'>
            <label for='categoria'>categoria:</label>
            <input class='entrada' type='text' name='categoria' value=".$categoria."><br>
            <label for='nomeFantasia'>nomeFantasia:</label>
            <input class='entrada' type='text' name='nomeFantasia' value=".$nomeFantasia."><br>
            <label for='cnpj'>cnpj:</label>
            <input class='entrada' type='text' name='cnpj' value=".$cnpj."><br>
            <label for='contato'>contato:</label>
            <input class='entrada' type='number' name='contato' value=".$contato."><br>
            <label for='endereco'>endereco:</label>
            <input class='entrada' type='text' name='endereco' value=".$endereco."><br>
            <input class='entrada' type='hidden' name='id' value='$idEstabelecimento'><br>
            <input class='entrada' type='hidden' name='op' value='$operacao'><br>
            <input class='entrada' class='butao' type='submit' value='$operacao'>
        </form>
    </div>
    -->

    <?php
    $idEstabelecimento = "";
    $categoria = "";
    $nomeFantasia = "";
    $cnpj = "";
    $contato = "";
    $endereco = "";
    $operacao = "cadastrarEstabelecimento";
    ?>

</body>

</html>