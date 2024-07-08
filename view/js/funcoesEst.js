var condicao2 = new Boolean(true);

function mostrarDivEst() {
  console.log(condicao2);
  if (condicao2 == true) {
    
    var div_cadastro = document.getElementById("div_cadastro");
    div_cadastro.style.display = "flex";
    var div_formulario = document.getElementById("div_formulario");
    div_formulario.style.display = "flex";
    var blur = document.getElementById("blur");
    blur.style.display = "flex";
    
  } else {
    
    div_cadastro = document.getElementById("div_cadastro");
    div_cadastro.style.display = "none"
    div_formulario = document.getElementById("div_formulario");
    div_formulario.style.display = "none";
    var blur = document.getElementById("blur");
    blur.style.display = "none";
  }
}
    var botaoEst = document.getElementById("cadastroEst");
    botaoEst.addEventListener("click", mostrarDivEst);