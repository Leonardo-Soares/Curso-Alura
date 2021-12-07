<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5</title>
</head>
<body>

<p>

</p>
    <?php
        echo "<h3>Contagem utilizando o while:</h3>";
        $produtos = 1;
        while ($produtos <= 2) {
            echo $produtos;
            echo "<br>";
            $produtos = $produtos + 1;
        } 

        echo "<h3>Utilizando o for para contagem:</h3>";
        for ($contador=1; $contador <= 2; $contador++) { 
            echo $contador;
            echo "<br>";
        }

        echo "<h3>Ingnorar uma determinada contagem e continuar:</h3>";
        for ($contador=1; $contador < 15; $contador++) { 
            if ($contador==13) {
                continue;
            }
            
            echo $contador;
            echo "<hr>";
        }

        echo "<h3>Ingnorar uma determinada contagem e parar:</h3>";
        for ($contador=1; $contador <= 5; $contador++) { 
            if ($contador == 5) {
                break;
            }
            echo "- $contador";
            echo "<br>";
        }
    ?>

    <h3>Nessa aula aprendemos sobre laços (loops) para repetir um bloco de código várias vezes.</h3>
    
    <ul>
        <li> Existem algumas variações de laços, dentre elas: </li>
        <ul>
            <li> while que possui uma condição de entrada</li>
            <li> do-while que possui uma condição de permanência (sempre executa o bloco pelo menos uma vez)</li>
            <li> while que possui uma condição de entrada  </li>
            <li> for que possui a declaração de uma variável, uma condição entrada e o increment </li>
        </ul>    
        <li> Dentro do bloco do laço podemos pular uma interação com o comando continue </li>
        <li> Com o comando break podemos sair do laço </li>
        <li> A variável contador normalmente se chama i </li>
    </ul>

</body>
</html>