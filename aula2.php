<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
    echo "Váriaveis";

    echo "<hr>";
    
    echo "Operações Matemáticas";
    echo "<hr>";
    $idade = 50;
    echo "Idade = $idade";
    $futuro = $idade + 10;

    echo "<hr>";
    echo "Exemplo de Soma => $idade + 10 = $futuro";

    $futuro = $idade - 10;
    echo "<hr>";
    echo "Exemplo de Subtração => $idade - 10 = $futuro";

    $futuro = $idade / 10;
    echo "<hr>";
    echo "Exemplo de Divisão => $idade / 10 = $futuro";

    $futuro = $idade * 10;
    echo "<hr>";
    echo "Exemplo de Multiplicação => $idade * 10 = $futuro"; 

    $futuro = $idade ** 10;
    echo "<hr>";
    echo "Exemplo de Potêncai => $idade ^ 10 = $futuro";

    $futuro = $idade % 10;
    echo "<hr>";
    echo "Exemplo de Divisão Pegando o Resto => $idade % 10 = $futuro";

    echo "<hr>";
    echo "<hr>";

    echo "Tipos de Dados Primitivos";
    echo "<hr>";

    $int = 123;
    $float = 69.90;
    $string = "Texto";
    $boolean1 = True;
    $boolean2 = False;

    echo "inteiro =>  $int";
    echo "<br>";
    echo "float =>  $float";
    echo "<br>";
    echo "string =>  $string";
    echo "<br>";
    echo "boleano =>  $boolean1";
    echo "<hr>";

    echo "Para verificar o tipo de dado basta utilizar gettype($ nome-da-variavel) ";

    ?>
    
</body>
</html>



