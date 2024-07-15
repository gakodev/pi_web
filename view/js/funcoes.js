
var condicao = new Boolean(true);

function mostrarDiv() {
  console.log(condicao);
  if (condicao == true) {
    var card_cadastro = document.getElementById("card_cadastro");
    card_cadastro.style.display = "flex";
    var blur = document.getElementById("blur");
    blur.style.display = "flex";
    var div_central = document.getElementById("div_central");
    div_central.style.display = "flex";
  } else {
    var card_cadastro = document.getElementById("card_cadastro");
    card_cadastro.style.display = "none";
    var blur = document.getElementById("blur");
    blur.style.display = "none";
    var div_central = document.getElementById("div_central");
    div_central.style.display = "none";
  }
}

function mostrarDivLogin() {
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

var botao = document.getElementById("cadastro");
botao.addEventListener("click", mostrarDiv);

var botaoX = document.getElementById("botaoX");
botaoX.addEventListener("click", mostrarDiv);

var botaoLogin = document.getElementById("login");
botaoLogin.addEventListener("click", mostrarDivLogin);


function consultaCampos() {
    var submit1 = document.getElementById("nome-input").value;
    var submit2 = document.getElementById("cpf-input").value;
    var submit3 = document.getElementById("dataNascimento-input").value;
    var submit4 = document.getElementById("numCelular-input").value;
    var submit5 = document.getElementById("email-input").value;
    var submit6 = document.getElementById("pw-input").value;
    var submit7 = document.getElementById("pw-confirm-input").value;

  if (submit1 === "" || submit2 === "" || submit3 === "" || submit4 === "" || submit5 === "" || submit6 === "" || submit7 === "") {
    alert("Preencha todos os campos!");
    return false;
  } else {
    return true;
  }
}

var submitcelular = document.getElementById("numCelular-input");
submitcelular.addEventListener("keyup", formatarCelular);

var submitcpf = document.getElementById("cpf-input");
submitcpf.addEventListener("keyup", formatarCPF);

function formatarCPF(e) {
  var v=e.target.value.replace(/\D/g,"");
  v = v.replace(/(\d{3})(\d)/, "$1.$2");
  v = v.replace(/(\d{3})(\d)/, "$1.$2");
  v = v.replace(/(\d{3})(\d{1,2})$/,"$1-$2");
  e.target.value = v;
}

function formatarCelular(e){
  var v=e.target.value.replace(/\D/g,"");
  v=v.replace(/^(\d\d)(\d)/g,"($1)$2");
  v=v.replace(/(\d{5})(\d)/,"$1-$2");
  e.target.value = v;
}



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

    var condicao = new Boolean(true);

  

