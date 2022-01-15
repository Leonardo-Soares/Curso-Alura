// IMPRESSÃO NO CONSOLE DO NAVEGADOR 
//console.log('teste console'); 
//console.log(document);

// SELETOR
//var exibir = document.querySelector("h1");
//console.log(exibir);

var titulo_menu = document.querySelector(".titulo-menu");
titulo_menu.textContent = "Alessandra Monteiro";

var url_atual = window.location.href;


if (url_atual == '%','index.html'){
    console.log('essa');
} else if (url_atual == '%','sobre.html') {
    console.log('outra');
} else {
    console.log('erro');
}

console.log(url_atual);



var cliente = document.querySelector("#primeiro-paciente");
var tdpeso = cliente.querySelector(".info-peso");
var peso = tdpeso.textContent;
var tdaltura = cliente.querySelector(".info-altura");
var altura = tdaltura.textContent;

var imc = peso / (altura * altura);


console.log(cliente);
console.log(peso);
console.log(altura);

console.log(imc);