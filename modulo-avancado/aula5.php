<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5 - Avançado</title>
</head>
<body>
    <h3>Referências e mais listas</h3>
    <?php
    
    $text = "Algum texto";

    echo strtoupper($text);

    echo "<br/>";

    echo "Sem função";

    ?>

    <h3>Passagem com valor / Passagem com referência</h3>

    <img src="pass-by-reference-vs-pass-by-value-animation.gif" alt="gif com xícará"> <br>

    function minhaFuncao(&$meuParametro) <br>
    {<br>
    }<br>
    minhaFuncao($variavel);<br><br>

Alternativa correta! Desta forma, o endereço da variável $variavel será recebido na função minhaFuncao. Qualquer alteração em $meuParametro dentro da função refletirá na variável original que foi passada ($variavel). Para uma explicação mais completa (e complexa), acesse a documentação


</body>
</html>