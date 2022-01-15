var titulo_menu = document.querySelector(".titulo-menu");
titulo_menu.textContent = "Meus Pacientes";

// BUSCA DE 1 PACIENTE
var paciente = document.querySelector("#primeiro-paciente");
var titulopaciente = paciente.querySelector(".info-nome");
var tdpeso = paciente.querySelector(".info-peso");
var tdaltura = paciente.querySelector(".info-altura");
var tdImc = paciente.querySelector(".info-imc");

var paciente = titulopaciente.textContent;
var peso = tdpeso.textContent; // Vai pegar o conteudo da váriavel
var altura = tdaltura.textContent; // Vai pegar o conteudo da váriavel

validaPeso = true;
validaAltura = true;

// Validação 
if (peso <= 0 || peso >= 1000) {
    validaPeso = false;
    tdImc.textContent = "Peso inválido";
}

else if (altura <= 0 || altura >= 3.05) {
    validaAltura = false;
    tdImc.textContent = "Altura inválida";
}

else if (validaPeso == false && validaAltura == false) {
    tdImc.textContent = "Altura e peso inválidos!"
}

else if (validaPeso && validaAltura) {
    var imc = (peso / (altura * altura)); // Calcula o IMC

    tdImc.textContent = imc; // Exibi imc na table
}

else {
    tdImc.textContent = "Erro";
}







