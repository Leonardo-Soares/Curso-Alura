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

    <h3>
        Para saber mais: Arrays
    </h3>
    
    <p>
        <b>Conceito: </b>Um array no PHP é na verdade um mapa ordenado. Um mapa é um tipo que relaciona valores a chaves. Este tipo é otimizado para várias usos diferentes: ele pode ser tratado como um array, uma lista (vetor), hashtable (que é uma implementação de mapa), dicionário, coleção, pilha, fila e provavelmente mais. Assim como existe a possibilidade dos valores do array serem outros arrays, árvores e arrays multidimensionais. 
    </p>

    <p>
        Os 2 primeiros capítulos deste curso foram exclusivamente sobre Arrays no PHP. Isso se dá pelo fato desta estrutura de dados ser tão poderosa da forma como é implementada no PHP, mas algumas considerações DEVEM ser feitas.
    </p>

    <ul>
        <li>A primeira é: O array no PHP não é um array de verdade, como conhecemos nas demais linguagens. Internamente, os arrays são armazenados como HashTables (tabelas de espalhamento), e por isso eles são tão poderosos.</li>
        <li>Têm tamanho dinâmico, podem ter strings como seus índices e podem ser manipulados de diversas formas.</li>
        <li>Mas com grandes poderes vêm grandes responsabilidades, e muitas pessoas abusam destes poderes. Tome cuidado para não tratar o array no PHP como a única opção para modelar seus dados. Conheça as outras opções e saiba quando aplicar cada uma. Uma dica: Estude (muito) sobre orientação a objetos e não use arrays quando deveria estar utilizando objetos.</li>
        <li>Para saber mais sobre arrays: <a href="https://www.php.net/manual/pt_BR/language.types.array.php" target="_blank">PHP ARRAYS</a> </li>
    </ul>

    <h3>O que aprendemos</h3>
   <ul>
        <li>um array associativo sempre define elementos composto por uma chave e um valor</li>
        <ul>
           <li>a associação entre chave e valor é feito com =></li>
           <li>o valor pode ser um valor primitivo ou outro array</li>
           <li>a chave funciona como um índice explicito (definido por nós)</li>
           <li>a chave deve ser do tipo inteiro ou string, todos os outros tipos o PHP tenta converter</li>
        </ul>
        <li>um array associativo também é chamado de mapa ou dicionário</li>
        <li>podemos combinar um array simples e array associativo para definir estruturas mais complexas</li>
        <li>o laço foreach oferece uma forma mais expressiva de iteração</li>
        <ul>
            <li>
                no foreach podemos acessar o índice e o valor do elemento da iteração
            </li>
        </ul>
        <li>arrays podem crescer e podemos adicionar novos elementos</li>
        <li>em arrays simples, com índice numérico, basta usar [] para adicionar um elemento no final (por exemplo, $lista[] = 12;)</li>
        <ul>
            <li>
                nesse caso o PHP automaticamente incrementa o índice 
            </li>
        </ul>
   </ul>

</body>
</html>



