<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="cadastroEstabelecimentoCss.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Chivo:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
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
    <div id="e"></div>
    <div id="d">

      <div id="comp">
        <h1>A plataforma perfeita para seu estabelecimento, <br>
          melhores seus resultados com a Reserve.</h1>

        <div id="icones">

          <div class="icone_e_texto">
            <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon src="https://cdn.lordicon.com/wyqtxzeh.json" trigger="hover"
              colors="primary:#ffffff,secondary:#e88c30" style="width:100px;height:100px">
            </lord-icon>
            <p class="desc">Aproveite a oportunidade e começe a monetizar suas reservas!</p>
          </div>

          <div class="icone_e_texto">
            <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon src="https://cdn.lordicon.com/wzrwaorf.json" trigger="hover"
              colors="primary:#ffffff,secondary:#e88c30" style="width:100px;height:100px">
            </lord-icon>
            <p class="desc">Controle suas reservas e filas de uma forma simples e organizada</p>
          </div>

          <div class="icone_e_texto">
            <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon src="https://cdn.lordicon.com/abwrkdvl.json" trigger="hover"
              colors="primary:#ffffff,secondary:#e88c30" style="width:100px;height:100px">
            </lord-icon>
            <p class="desc">Escale sua operação organizando seu tempo e focando naquilo que realmente <br>
              precise da sua atenção!</p>
          </div>

          <div class="icone_e_texto">
            <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon src="https://cdn.lordicon.com/pbbsmkso.json" trigger="hover"
              colors="primary:#ffffff,secondary:#e88c30" style="width:100px;height:100px">
            </lord-icon>
            <p class="desc">Sem restrição geográfica, a plataforma pode ser acessada de qualquer <br>
              lugar do globo</p>
          </div>

          <div class="icone_e_texto">
            <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon src="https://cdn.lordicon.com/piwupaqb.json" trigger="hover"
              colors="primary:#ffffff,secondary:#e88c30" style="width:100px;height:100px">
            </lord-icon>
            <p class="desc">Aumente sua porcentagem de tráfego orgânico e novos clientes para seu <br>
              estabelecimento!</p>
          </div>

        </div>
      </div>
      <div id="texto">
        <h1>Aqui você encontra melhores resultados, <br>
          seja nosso parceiro!</h1>
      </div>
      <div id="div_botoes">
        <div id="workarea">
          <div class="position">
            <div class="svg-wrapper">
              <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                <rect id="shape" height="40" width="150" />
                <div id="text">
                  <a href=""><span class="spot"></span><b>Começar hoje</b></a>
                </div>
              </svg>
            </div>

            <div class="svg-wrapper">
              <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                <rect id="shape" height="40" width="150" />
                <div id="text">
                  <a href=""><span class="spot"></span><b>Entrar</b></a>
                </div>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
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