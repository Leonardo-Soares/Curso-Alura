var titulo_menu = document.querySelector(".titulo-menu");
titulo_menu.textContent = "Meus Pacientes";

var paciente = document.querySelector("#primeiro-paciente");
console.log(paciente);


// var cliente = document.querySelector("#primeiro-paciente");
// var tdpeso = cliente.querySelector(".info-peso");
// var peso = tdpeso.textContent;
// var tdaltura = cliente.querySelector(".info-altura");
// var altura = tdaltura.textContent;

var imc = peso / (altura * altura);


console.log(cliente);
console.log(peso);
console.log(altura);

console.log(imc);