function consultaCampos() {
    var submit1 = document.getElementById("input1").value;
    var submit2 = document.getElementById("input2").value;
    var submit3 = document.getElementById("input3").value;
    var submit4 = document.getElementById("input4").value;
    var submit5 = document.getElementById("input5").value;
    var submit6 = document.getElementById("input6").value;

  if (submit1 === "" || submit2 === "" || submit3 === "" || submit4 === "" || submit5 === "" || submit6 === "") {
    alert("Preencha todos os campos!");
    return false;
  } else {
    return true;
  }
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

    var botao = document.getElementById("cadastro");
    botao.addEventListener("click", mostrarDiv);

    var botaoX = document.getElementById("botaoX");
    botaoX.addEventListener("click", mostrarDiv);

   

