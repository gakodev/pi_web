<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Pagina do estabelecimento</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='pagina-do-estabelecimentoCss.css'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
</head>

<body>
  <header>
    <nav>
      <img src='imgs/logonobg_laranja.png' alt=''>
      <ul id="ul_header">
        <li><a id="nosso-site" href="#">Nosso site</a></li>
        <li><a id="nosso-site" href="consulta-estabelecimento.php">Meu painel</a></li>
      </ul>
    </nav>
  </header>

  <div id="blur">
  </div>

  <div id='div_central'>
    <div id="card_login">
      <div id="cabecalho-login">
        <h2 class="montserrat">Login</h2>
        <div id='X'>
          <a id='botaoX' href='pagina-do-estabelecimento.php'><img class='imgX' src='svg/x-circle.svg' alt=''></a>
        </div>
      </div>

      <form id="div-formlogin" method="post" action="../login/loginEst.php">
        <div class="div-label-input">
          <label for="cnpj">
            <img src="svg/envelope.svg" alt="">
          </label>
          <input type="text" name="cnpj" id="cnpj-input-login" placeholder="CNPJ" required>
        </div>

        <div class="div-label-input">
          <label for="pw">
            <img src="svg/lock.svg" alt="">
          </label>
          <input type="password" name="pw" id="pw-input-login" placeholder="Senha" required>
        </div>
        <div id='div_botao'>
          <input class="button-27" role="button" type="submit" value="Login">
        </div>
      </form>
    </div>
  </div>

  <main>
    <div id="div-grid-container" class="grid-container">
      <div id="div-left" class="left">
        <div class="text-title">
          <h2>Te ajudamos <b class="laranja-reserve">a encontrar</b> <br> seus <b class="laranja-reserve">melhores
              resultados!</b></h2>
        </div>
        <div id="div-list">
          <ul id="list">
            <li class="list-item">
              <img class="icon" src="imgs/alinhamento-do-grafico.png" alt="">
              <span>Aqui você tem o controle das suas reservas e uma melhor<br>
                organização para o seu negócio.
              </span>
            </li>
            <li class="list-item">
              <img class="icon" src="imgs/dolar-da-fatura-do-arquivo (1).png" alt="">
              <span>Melhore seus resultados com a nossa ajuda e estude <br>
                uma possibilidade de expansão.
              </span>
            </li>
            <li class="list-item">
              <img class="icon" src="imgs/terra-americas.png" alt="">
              <span>Gerencie de qualquer lugar do mundo!</span>
            </li>
            <li class="list-item">
              <img class="icon" src="imgs/restaurante.png" alt="">
              <span>Divulgue! Faça com que sua empresa seja mais vista, <br>
                por mais pessoas!
              </span>
            </li>
          </ul>
        </div>
        <div id="div-buttons">
          <button class="button-27" role="button" id="login">Entrar</button>
          <button class="button-28" role="button"><a href="cadastro-estabelecimento.php">Cadastrar</a></button>
        </div>
      </div>
    </div>
  </main>
  <script src="js/funcoesEst.js"></script>
</body>

</html>