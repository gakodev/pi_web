<?php
session_start();

// Verifica se o usuário está logado
$isLoggedIn = isset($_SESSION['idCliente']);
$loginError = isset($_SESSION['login_error']) ? $_SESSION['login_error'] : null;
if ($loginError) {
    unset($_SESSION['login_error']);
}

// Verifica se a chave 'idCliente' está definida antes de acessá-la
$idCliente = isset($_SESSION['idCliente']) ? $_SESSION['idCliente'] : null;
?>
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
        <li><a href="pagina-do-estabelecimento.php">Seja nosso parceiro!</a></li>
        <?php if ($isLoggedIn): ?>
          <li><a id="logout" href="../login/logout.php">Logout</a></li>
        <?php else: ?>
          <li><a id="cadastro" class="mostrar-cadastro" href="#">Cadastrar</a></li>
          <li><a id="login" class="mostrar-login" href="#">Entrar</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </header>

  <div id="blur">
  </div>

  <div id='div_central'>

    <div id='card_cadastro'>
      <div id='cabecalho'>
        <div id='div-form-title'>
          <h2 class="montserrat">Registre-se</h2>
        </div>
        <div id='X'>
          <a id='botaoX' href='index.php'><img class='imgX' src='svg/x-circle.svg' alt=''></a>
        </div>
      </div>

      <!--- FORM DE CADASTRO --->

      <div id='div_formulario'>

        <form id='register-form' method='post' action='../controller/processa.php' onsubmit="return consultaCampos()">

          <div class="div-label-input">
            <label for="nome">
              <img src="svg/person-circle.svg" alt="">
            </label>
            <input type="text" name="nome" id="nome-input" placeholder="Nome">
          </div>

          <div class="div-label-input">
            <label for="cpf">
              <img src="svg/fingerprint.svg" alt="">
            </label>
            <input type="text" name="cpf" id="cpf-input" placeholder="CPF" maxlength="14">
          </div>

          <div class="div-label-input">
            <label for="dataNascimento">
              <img src="svg/calendar.svg" alt="">
            </label>
            <input type="text" name="dataNascimento" id="dataNascimento-input" placeholder="dataReserva de nascimento"
              maxlength="10">
          </div>

          <div class="div-label-input">
            <label for="numCelular">
              <img src="svg/telephone.svg" alt="">
            </label>
            <input type="text" name="numCelular" id="numCelular-input" placeholder="Número para contato" maxlength="14">
          </div>

          <div class="div-label-input">
            <label for="email">
              <img src="svg/envelope.svg" alt="">
            </label>
            <input type="text" name="email" id="email-input" placeholder="E-mail">
          </div>

          <div class="div-label-input">
            <label for="pw">
              <img src="svg/lock.svg" alt="">
            </label>
            <input type="password" name="pw" id="pw-input" placeholder="Senha">
          </div>

          <div class="div-label-input">
            <label for="pw">
              <img src="svg/lock-fill.svg" alt="">
            </label>
            <input type="password" name="pw-confirm" id="pw-confirm-input" placeholder="Confirme sua senha!">
          </div>

          <input class='entrada' type='hidden' name='id' value='$idCliente'>
          <input class='entrada' type='hidden' name='op' value='cadastrarCliente'>
          <div id='div_botao'>
            <input class="button-27" role="button" type="submit">
          </div>
        </form>
      </div>
    </div>

    <!--- FORM DE LOGIN --->

    <div id="card_login">
      <div id="cabecalho-login">
        <h2 class="montserrat">Login</h2>
        <div id='X'>
          <a id='botaoX' href='index.php'><img class='imgX' src='svg/x-circle.svg' alt=''></a>
        </div>
      </div>

      <form id="div-formlogin" method="post" action="../login/login.php">
        <div class="div-label-input">
          <label for="email">
            <img src="svg/envelope.svg" alt="">
          </label>
          <input type="text" name="email" id="email-input-login" placeholder="E-mail" required>
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

     <!-- Formulário de Reserva (visível apenas para usuários logados) -->
<?php if ($isLoggedIn): ?>
  <div id="card_reserva" style="display: none;">
    <div id='cabecalho'>
      <div id='div-form-reserva-title'>
        <h2 class="montserrat">Reserva</h2>
      </div>
      <div id='X'>
        <a id='botaoX' href='#' onclick="esconderFormulario(); return false;"><img class='imgX' src='svg/x-circle.svg' alt=''></a>
      </div>
    </div>

    <form id="form-reserva" method="post" action="../controller/processa.php">
      <div class="div-label-input">
        <label for="numConvidados">
          <img src="svg/people-fill.svg" alt="">
        </label>
        <input type="text" name="numConvidados" id="numConvidados-input" placeholder="Número de convidados" required>
      </div>
      <div class="div-label-input">
        <label for="dataReserva">
          <img src="svg/calendar.svg" alt="">
        </label>
        <input type="date" name="dataReserva" id="dataReserva-input" placeholder="Data da reserva" required>
      </div>
      <div class="div-label-input">
        <label for="hora">
          <img src="svg/clock-fill.svg" alt="">
        </label>
        <input type="time" name="hora" id="hora-input" placeholder="Hora">
      </div>
      <div class="div-label-input">
        <label for="ambiente">
          <img src="svg/house-add-fill.svg" alt="">
        </label>
        <select name="ambiente" id="ambiente-input" aria-placeholder="Ambiente">
          <option value="">Ambiente</option>
          <option value="Restaurante">Interno</option>
          <option value="Bar">Externo</option>
        </select>
      </div>
      <div class="div-label-input">
        <label for="ocasiao">
          <img src="svg/balloon-fill.svg" alt="">
        </label>
        <select name="ocasiao" id="ocasiao-input" required>
          <option value="">Ocasião</option>
          <option value="Aniversário">Aniversário</option>
          <option value="Jantar-a-dois">Jantar a dois</option>
          <option value="Outro">Outro</option>
        </select>
      </div>
      <div class="div-label-input">
        <label for="obs">
          <img src="svg/pencil-square.svg" alt="">
        </label>
        <input name="obs" type="text" id="obs-input" placeholder="Observações">
      </div>
      <input class='entrada' type='hidden' name='id' value='$idReserva'>
      <input class='entrada' type='hidden' name='op' value='cadastrarReserva'>
      <input type="hidden" name="FK_idCliente" value="<?php echo htmlspecialchars($idCliente); ?>">
      <input type="hidden" id="FK_idEstabelecimento" name="FK_idEstabelecimento" value="">
      <div id='div_botao'>
        <input class="button-27" role="button" type="submit" value="Reservar!">
      </div>
    </form>
  </div>
<?php endif; ?>





  </div>
  <div id="div-gallery">
    <ul class="gallery">
      <li style="background: #744700;"> <img src="imgs/prato1.jpg" alt=""></li>
      <li style="background: #ce7e00;"> <img src="imgs/sirene-foto.jpg" alt=""></li>
      <li style="background: #8fce00;"> <img src="imgs/cara-louco.jpg" alt=""></li>
      <li style="background: #2986cc;">  <img src="imgs/massa-daora.jpg" alt=""></li>
      <li style="background: #16537e;"> <img src="imgs/cafezin.jpg" alt=""></li>
      <li style="background: #6a329f;"> <img src="imgs/bar.jpg" alt=""></li>
      <li style="background: #c90076;"> <img src="imgs/barzim.jpg" alt=""></li>
      <li style="background: #b4a7d6;"> <img src="imgs/festina.jpg" alt=""></li>
    </ul>
  </div>
  <div id='div-about'>
    <div id='about-text'>
      <h1>Encontrar seu próximo destino nunca foi tão fácil</h1>
      <hr>
      <p>Aqui é o melhor lugar para você fazer as reservas dos seus lugares favoritos! Seja pra um aniversário,
        comemoração, jantar romântico e seja qualquer outra ocasião. <br>
        Ou se você está cansado da mesmisce, aqui tem vários estabelecimentos a se conhecer; casas de festas, bares,
        restaurantes, cafeterias e muito mais!</p>
    </div>
  </div>



  <div class="center">
    <!-- Card 1 -->
    <div class="property-card">
      <a href="#" class="mostrar-reserva" data-id="11">
        <div class="property-image">
          <div class='card-img'>
            <img class="property-image" src="imgs/fundo.jpeg" alt="Fuga">
            <div class="property-image-title"></div>
          </div>
        </div>
      </a>
      <div class="property-description">
        <h5>Fuga Bar - Cais Embarcadero</h5>
        <br>
        <p>Av. Maua, 1500 - Porto Alegre, RS.</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="property-card">
      <a href="#" class="mostrar-reserva" data-id="12">
        <div class="property-image">
          <div class='card-img'>
            <img class="property-image" src="imgs/severina.png" alt="Severina">
            <div class="property-image-title"></div>
          </div>
        </div>
      </a>
      <div class="property-description">
        <h5>Severina</h5>
        <br>
        <p>Rua Campo de São Cristóvão, 4600.</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="property-card">
      <a href="#" class="mostrar-reserva" data-id="13">
        <div class="property-image">
          <div class='card-img'>
            <img class="property-image" src="imgs/wills.png" alt="Wills">
            <div class="property-image-title"></div>
          </div>
        </div>
      </a>
      <div class="property-description">
        <h5>Wills Bar</h5>
        <br>
        <p>Av. Maua, 1500 - Porto Alegre, RS.</p>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="property-card">
      <a href="#" class="mostrar-reserva" data-id="14">
        <div class="property-image">
          <div class='card-img'>
            <img class="property-image" src="imgs/20barra9.png" alt="20/9">
            <div class="property-image-title"></div>
          </div>
        </div>
      </a>
      <div class="property-description">
        <h5>20/9</h5>
        <br>
        <p>Dinarte Ribeiro, 214 - Porto Alegre, RS </p>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="property-card">
      <a href="#" class="mostrar-reserva" data-id="15">
        <div class="property-image">
          <div class='card-img'>
            <img class="property-image" src="imgs/canto.png" alt="Canto bar">
            <div class="property-image-title"></div>
          </div>
        </div>
      </a>
      <div class="property-description">
        <h5>Canto Bar</h5>
        <br>
        <p>R. Álvaro Chaves, 350 - Porto Alegre, RS</p>
      </div>
    </div>

    <!-- Card 6 -->
    <div class="property-card">
      <a href="#" class="mostrar-reserva" data-id="16">
        <div class="property-image">
          <div class='card-img'>
            <img class="property-image" src="imgs/sirene.jpg" alt="Canto bar">
            <div class="property-image-title"></div>
          </div>
        </div>
      </a>
      <div class="property-description">
        <h5>Sirene</h5>
        <br>
        <p>R. José do Patrocínio, 778 - Cidade Baixa, Porto Alegre - RS</p>
      </div>
    </div>
</div>

<script>
    function mostrarFormulario() {
        document.getElementById('card_reserva').style.display = 'block';
    }

    function esconderFormulario() {
        document.getElementById('card_reserva').style.display = 'none';
    }

    document.querySelectorAll('.mostrar-reserva').forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault(); // Evita o comportamento padrão do link
            const estabelecimentoId = this.getAttribute('data-id');
            
            // Atualiza o campo oculto do formulário com o ID do estabelecimento
            document.getElementById('FK_idEstabelecimento').value = estabelecimentoId;
            
            // Exibe o formulário de reserva
            mostrarFormulario();
        });
    });
</script>
</div>



  </div>

  <footer>
  </footer>

  <script src="js/funcoes.js"></script>
</body>

</html>