var condicao = true; // Não é necessário usar 'new Boolean(true)'

function mostrarDiv() {
  console.log(condicao);
  var card_login = document.getElementById("card_login");
  var blur = document.getElementById("blur");
  var div_central = document.getElementById("div_central");

  if (condicao) {
    card_login.style.display = "flex";
    blur.style.display = "flex";
    div_central.style.display = "flex";
  } else {
    card_login.style.display = "none";
    blur.style.display = "none";
    div_central.style.display = "none";
  }
}

// Correção: passando a função mostrarDiv como referência, sem parênteses
var botaoEst = document.getElementById("login");
botaoEst.addEventListener("click", mostrarDiv);