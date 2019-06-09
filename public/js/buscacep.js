// cria referência aos elementos da página
var cep = document.getElementById("cep");
var cidade = document.getElementById("cidade");
var bairro = document.getElementById("bairro");
var uf = document.getElementById("uf");
var endereco = document.getElementById("endereco");

// registra um ouvinte de evento associado a uma function
cep.addEventListener("blur", buscarCep);

function buscarCep() {
  var cepValue = cep.value;
  var url = "http://cep.republicavirtual.com.br/web_cep.php?cep="+cepValue+"&formato=json";

  fetch(url)
  .then((resp) => resp.json()) // Transform the data into json
  .then(function(data) {
    endereco.value = data.tipo_logradouro + " " + data.logradouro;
    cidade.value = data.cidade;
    bairro.value = data.bairro;
    uf.value = data.uf;
  })
}