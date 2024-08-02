var condicao2 = new Boolean(true);

function mostrarDiv() {
  console.log(condicao);
  if (condicao == true) {
    var card_login = document.getElementById("card_login");
    card_login.style.display = "flex";
    var blur = document.getElementById("blur");
    blur.style.display = "flex";
    var div_central = document.getElementById("div_central");
    div_central.style.display = "flex";
  } else {
    var card_login = document.getElementById("card_login");
    card_login.style.display = "none";
    var blur = document.getElementById("blur");
    blur.style.display = "none";
    var div_central = document.getElementById("div_central");
    div_central.style.display = "none";
  }
}
    var botaoEst = document.getElementById("login");
    botaoEst.addEventListener("click", mostrarDiv());