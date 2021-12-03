<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 - Desafios</title>
</head>
<body>
    <h3>Dentro do projeto "php-primeiros-passos", criaremos uma 
        nova pasta chamada "desafios". O primeiro desafio será executar 
        um programa que exiba, na tela do usuário, todos os números ímpares 
        de 0 à 100. Uma dica: para saber se um número é ímpar ou não no PHP, 
        podemos utilizar o operador de resto de divisão por 2 - se esse resto 
        for igual a 0, o número é par; caso contrário, ele é ímpar.
    </h3>

    <?php 
    
    for ($verifica=0; $verifica <= 100; $verifica++) { 
        if ($verifica%2 == 0) {
            continue;
        }else {
            echo "- $verifica";
            echo "<br>";
        }
    }
    ?>

    <h3> 
        A ideia agora é exibir a tabuada de determinado número. Ou seja, 
        temos um número armazenado em uma variável qualquer, e queremos 
        exibir o resultado da sua multiplicação de 1 até 9
    </h3>

    <?php 


        for ($numero=0; $numero <= 9; $numero++) { 
            $multiplica = 2;
            $resultado = $numero * $multiplica;
            echo "$numero x $multiplica = $resultado";
            echo "<br>";
        }
    ?>

    <h3>
        Agora que solucionamos mais esse desafio, vamos aumentar a 
        dificuldade. A ideia é, a partir de uma altura e peso definidas, 
        calcularmos o IMC. Para isso, você precisará pesquisar a fórmula 
        na internet (que é bastante simples).
        <br>
        A partir dessa fórmula e da tabela de IMCs, o código deverá exibir 
        se o usuário está abaixo, dentro ou acima do nível recomendado. 
    </h3>

    <table>
        <thead>
            <tr>
                <th>Classificação</th>
                <th>IMC</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Abaixo do Peso</th>
                <th>Menos de 18,5</th>
            </tr>
            <tr>
                <th>Peso Normal</th>
                <th>18,5 a 24,9</th>
            </tr>
            <tr>
                <th>Sobrepeso</th>
                <th>25 - 29,9</th>
            </tr>
            <tr>
                <th>Obesidade Grau I</th>
                <th>30 - 34,9</th>
            </tr>
            <tr>
                <th>Obesidade Grau II</th>
                <th>35 a 39,9</th>
            </tr>
            <tr>
                <th>Obesidade Grau III ou Mórbida</th>
                <th>Maior ou igual a 40</th>
            </tr>
        </tbody>
        
    </table>

    <?php
        $peso = 59;
        $altura = 1.75;

        $resultado = $altura / $altura * $altura;
        echo $resultado;

        if ($resultado < 18.5) {
            echo "Abaixo do peso";
        } elseif ($resultado >= 18.5 || $resultado <= 24.9) {
            echo "Peso Normal";
        } elseif ($resultado >= 25 || $resultado <= 29.9) {
            echo "Sobrepeso";
        } elseif ($resultado >= 30 || $resultado <= 34.9){
            echo "Obesidade Grau I";
        } elseif ($resultado >= 35 || $resultado <= 39.9) {
            echo "Obesidade Grau II";
        } elseif ($resultado >= 40) {
            echo "Obesidade Grau III ou Mórbida";
        }
    ?>
</body>
</html>