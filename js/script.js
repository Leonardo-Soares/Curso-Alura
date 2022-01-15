var titulo_menu = document.querySelector(".titulo-menu");
titulo_menu.textContent = "Meus Pacientes";

var pacientes = document.querySelectorAll(".paciente");

for(var conta = 0; conta < pacientes.length; conta++){

    var paciente = pacientes[conta]; //Passa o array com o id de cada paciente

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
        tdImc.classList.add("dado-invalido")
    }

    else if (altura <= 0 || altura >= 3.00) {
        validaAltura = false;
        tdImc.textContent = "Altura inválida";
        tdImc.classList.add("dado-invalido")
    }

    else if (validaPeso && validaAltura) {
        var imc = (peso / (altura * altura)); // Calcula o IMC
        tdImc.textContent = imc.toFixed(2); // Exibi imc na table
    }

    else {
        tdImc.textContent = "Erro";
    }

}







