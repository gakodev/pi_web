function validaCampos (){
    const campo1 = document.getElementById('nomeFantasia-input').value;
    const campo2 = document.getElementById('cnpj-input').value;
    const campo3 = document.getElementById('contato-input').value;
    const campo4 = document.getElementById('endereco-input').value;
    const campo5 = document.getElementById('pw-input').value;
    const campo6 = document.getElementById('pw-confirm-input').value;
    const campo7 = document.getElementById('categoria-input').value;
    
    if (campo1 === '' || campo2 === '' || campo3 === '' || campo4 === '' || campo5 === '' || campo6 === '' || campo7 === '') {
        alert('Por favor, preencha todos os campos.');
      return false; 
    }

    var cnpj = document.getElementById('input2').value
    var telefone = document.getElementById('input3').value

    if ( telefone.length != '14' || cnpj.length != '18' ) {
        alert('Dados incorretos!');
        return false
    } 

    if (campo6 != campo5) {
        alert('As senhas nao sao iguais!');
        return false
    } 
}

// Funcao para validar cnpj
const inputCNPJ = document.getElementById('cnpj-input');
inputCNPJ.addEventListener("keyup", validarCNPJ);

function validarCNPJ(e) {
  var v = e.target.value.replace(/\D/g, "");
  v = v.replace(/^(\d{2})(\d)/, "$1.$2");
  v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");
  v = v.replace(/^(\d{2})\.(\d{3})\.(\d{3})/, "$1.$2.$3/");
  v = v.replace(/(\d{4})(\d)/, "$1-$2");
    e.target.value = v;
}
    
// Função para validar telefone
const inputTelefone = document.getElementById('contato-input');
inputTelefone.addEventListener("keyup", validarTelefone);

function validarTelefone(e) {
  var v=e.target.value.replace(/\D/g,"");
  var v=v.replace(/^(\d\d)(\d)/g,"($1)$2");
  var v=v.replace(/(\d{5})(\d)/,"$1-$2");
  e.target.value = v;
}