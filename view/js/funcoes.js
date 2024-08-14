function esconderTodasAsDivs() {
  var divs = document.querySelectorAll("#card_cadastro, #card_login, #card_reserva");
  var blur = document.getElementById("blur");
  var div_central = document.getElementById("div_central");

  divs.forEach(function(div) {
      div.style.display = "none";
  });

  if (blur) blur.style.display = "none";
  if (div_central) div_central.style.display = "none";
}

function mostrarDiv(divId) {
  esconderTodasAsDivs();

  var div = document.getElementById(divId);
  var blur = document.getElementById("blur");
  var div_central = document.getElementById("div_central");

  if (div) div.style.display = "flex";
  if (blur) blur.style.display = "flex";
  if (div_central) div_central.style.display = "flex";
}

document.getElementById("cadastro")?.addEventListener("click", function() {
  mostrarDiv("card_cadastro");
});

document.getElementById("login")?.addEventListener("click", function() {
  mostrarDiv("card_login");
});

document.getElementById("reserva")?.addEventListener("click", function() {
  mostrarDiv("card_reserva");
});

document.querySelectorAll("#botaoX").forEach(function(element) {
  element.addEventListener("click", esconderTodasAsDivs);
});

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

  

