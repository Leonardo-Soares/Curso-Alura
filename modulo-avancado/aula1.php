<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1 - Avançado</title>
</head>
<body>
    <h3>Arrays</h3>
    <p>Arrays ou Vetor é uma sequência de informações ou dados diefrentes (ou não) em uma váriavel</p>
    <?php 
        $lista = [0, 21, 33, 16];
        $armazena = $lista[0];
        echo $armazena;
    ?>
        <h3>Pecorrendo Array com For</h3>
    <?php 
        $lista = [0, 'Teste', 33, 16];

        for ($contador=0; $contador < 4; $contador++) { 
            echo $lista[$contador];
            echo "<br>";
        }

        echo "Tamanho do array: ", count($lista);
    ?>
    <p>
        Nessa aula, aprendemos sobre a estrutura de dados Array. Vimos que um Array:
        <br>
        <ul>
            <li>agrupa vários valores</li>
            <li>também é chamado de vetor ou lista (isso depende da linguagem ou plataforma)</li>
            <li>usa-se [] ou array() para declarar um novo array</li>
            <li>acessa um elemento usamos os []
                <ul>
                    <li>dentro dos `[]´ vem a posição do elemento</li>
                </ul>
            </li>
            <li>possui um índice que por padrão começa com 0 (zero)</li>
            <li>para acessar todos os elementos podemos usar uma estrutura de repetição</li>
            <li>para saber quantos elementos um array tem existe a função count()</li>
        </ul>
    </p>
</body>
</html>