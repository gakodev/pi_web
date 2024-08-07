<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="cadastro-estabelecimentoCss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Login Page</title>
</head>

<body>

    <div id="blur">
    </div>

    <div id="div-central" >
        <div id="div-card-login">
        
        </div>
    </div>

    <main>
        <div class="grid-container">
            <div class="div-register">
                <div class="div-form">
                    <h2>Registre-se</h2>
                    <form method="POST" action='../controller/processa.php' id="register-form" onsubmit="validaCampos()" >
                        <div class="div-label-input">
                            <label for="categoria">
                                <img src="svg/bookmark-plus-fill.svg" alt="">
                            </label>
                            <select name="categoria" id="categoria-input" aria-placeholder="Categoria">
                                <option value="">Selecione uma categoria</option>
                                <option value="Restaurante">Restaurante</option>
                                <option value="Bar">Bar</option>
                                <option value="Casa de festas">Casa de festas</option>
                                <option value="Cafeteria">Cafeteria</option>
                            </select>
                        </div>
                        <div class="div-label-input">
                            <label for="nomeFantasia">
                                <img src="svg/houses-fill.svg" alt="">
                            </label>
                            <input type="text" name="nomeFantasia" id="nomeFantasia-input" placeholder="Nome Fantasia">
                        </div>
                        <div class="div-label-input">
                            <label for="cnpj">
                                <img src="svg/briefcase-fill.svg" alt="">
                            </label>
                            <input type="text" name="cnpj" id="cnpj-input" placeholder="CNPJ" maxlength="18">
                        </div>
                        <div class="div-label-input">
                            <label for="contato">
                                <img src="svg/telephone-fill.svg" alt="">
                            </label>
                            <input type="text" name="contato" id="contato-input" placeholder="Número para contato" maxlength="14">
                        </div>
                        <div class="div-label-input">
                            <label for="endereco">
                                <img src="svg/geo-alt-fill.svg" alt="">
                            </label>
                            <input type="text" name="endereco" id="endereco-input" placeholder="Endereço">
                        </div>
                        <div class="div-label-input">
                            <label for="pw">
                                <img src="svg/lock.svg" alt="">
                            </label>
                            <input type="password" name="pw" id="pw-input" placeholder="Senha">
                        </div>
                        <div class="div-label-input">
                            <label for="pw-confirm">
                                <img src="svg/lock-fill.svg" alt="">
                            </label>
                            <input type="password" name="pw-confirm" id="pw-confirm-input" placeholder="Confirme sua senha!">
                        </div>
                        <div id="div-checkbox">
                            <input type="checkbox" for="cond">
                            <p>Eu aceito os <a href="">termos de condição e privacidade</a></p>
                            <input class='entrada' type='hidden' name='id' value='$idEstabelecimento'>
                            <input class='entrada' type='hidden' name='op' value='cadastrarEstabelecimento'>
                        </div>
                        <div id="div-button">

                            <button class="button-27" role="button" type="submit">Entrar</button>


                        </div>
                    </form>
                </div>
                <div id="div-img">
                    <img src="imgs/img-login-page.png" alt="">
                </div>

            </div>
        </div>
    </main>
    <script src="js/cadastro-estabelecimentoJs.js"></script>
</body>
<footer>

</footer>

</html>