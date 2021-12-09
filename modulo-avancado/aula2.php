<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 - Avançado</title>
</head>
<body>
    <h3> Arrays Associativos </h3>

    <?php
        $produto1 = [
            'Nome' => 'Mouse',
            'Valor' => 1000
        ];
        $produto2 = [
            'Nome' => 'Teclado',
            'Valor' => 100
        ];
        $produto3 = [
            'Nome' => 'Mouse Pad',
            'Valor' => 10
        ];
        
        echo $produto2['Nome'];
    ?>
    
    <p>
        <b>Recapitulando:</b> conseguimos definir uma chave/índice de um array passando o nome desejado, um operador de seta (=>) e o valor dessa chave. Da mesma forma que nas listas comuns, os valores de um array associativo em PHP são separados por vírgula. Portanto, no PHP, temos a distinção entre arrays numéricos, nos quais não definimos os índices, e arrays associativos, nos quais os índices são definidos e possuem significados. 
    </p>
    <p>
    Agora, queremos fazer um loop por essas contas e exibir o titular de cada uma delas. Como é que podemos fazer isso? Uma alternativa seria criarmos um for para iterar pelas contas correntes, pegar o valor do índice $i e utilizar ['titular'] para exibirmos o valor dessa chave. 
    </p>
    
    <?php
        $aluno1 = ['Nome' => 'Leonardo Soares', 'Nota' => 5.7];
        $aluno2 = ['Nome' => 'Lucas Silva', 'Nota' => 10.0];
        $aluno3 = ['Nome' => 'Marcos Silva', 'Nota' => 7.0];
        $provas = [$aluno1, $aluno2, $aluno3];

        //echo "Aluno:",$aluno1['Nome'];

        for ($i=0; $i < count($provas); $i++) { 
            echo "Nome do Aluno: ",$provas[$i]['Nome'];
            echo "<br>";
            echo "Nota do Aluno: ",$provas[$i]['Nota'];
            echo "<hr>";
        }
    ?>

    <?php 
    echo "<br><h3>Utilizando foreach</h3>";
        $usuario1 = [
            'Id' => 6456565655,
            'Nome' => 'Lucas Barros',
            'Idade' => 22
        ];
        $usuario2 = [
            'Id' => 3655665632,
            'Nome' => 'Moreira Barros',
            'Idade' => 95
        ];
        $usuario3 = [
            'Id' => 9999999111,
            'Nome' => 'Monteiro Rodrigues',
            'Idade' => 45
        ];
        $usuarios = [$usuario1, $usuario2, $usuario3];

        foreach ($usuarios as $conta) {
            echo "<br/>ID: ",$conta['Id'];
            echo "<br/>NOME: ", $conta['Nome'];
            echo "<br/>IDADE: ", $conta['Idade'], "<hr>";
        }
    ?>

    <?php 
        echo "<br/><h3>Array Dinâmico</h3>";

        $frontend = [
            'Id' => 123,
            'Nome' => 'React'
        ];

        $backend = [
            'Id' => 124,
            'Nome' => 'PHP'
        ];

        $linguas = [$frontend, $backend];

        $linguas[] = [
            'Id' => 1345,
            'Nome' => 'Teste'
        ];

        foreach ($linguas as $conta) {
            echo "<hr> Id: ",$conta['Id'], "<br/>";
            echo "Nome: ",$conta['Nome'],"<br/>";
        }

    ?>

    <?php
    echo "<hr>";
        $array = [
            1 => 'a',
            '1' => 'b',
            1.5 => 'c',
            true => 'd',
            'qualquer_coisa' => 'Teste'
        ];

        foreach ($array as $item) {
            echo $item .    PHP_EOL;
        }
    ?>

    <p>
        Primeiramente, o PHP só consegue trabalhar, em arrays associativos, com chaves 
        dos <b>tipos inteiro ou string</b>. Qualquer outro tipo diferente desses vai ser convertido 
        para uma string ou inteiro. Repare que, quando adicionamos o valor b, definimos uma string 1 
        como chave. Quando o PHP reconhece que uma chave tem um valor que pode ser representado numericamente, 
        ele tenta convertê-la para um inteiro. Nessa conversão, ele sobrescreveu o primeiro índice - dessa forma, 
        o "b" substituiu o "a".
    </p>

    <p>
        Os 2 primeiros capítulos deste curso foram exclusivamente sobre Arrays no PHP. Isso se dá pelo fato desta 
        estrutura de dados ser tão poderosa da forma como é implementada no PHP, mas algumas considerações DEVEM ser feitas.
    </p>

    <p>
        A primeira é: O array no PHP não é um array de verdade, como conhecemos nas demais linguagens. Internamente, os arrays 
        são armazenados como HashTables (tabelas de espalhamento), e por isso eles são tão poderosos. Têm tamanho dinâmico, 
        podem ter strings como seus índices e podem ser manipulados de diversas formas.
    </p>

    <p>
        Mas com grandes poderes vêm grandes responsabilidades, e muitas pessoas abusam destes poderes. Tome cuidado para não 
        tratar o array no PHP como a única opção para modelar seus dados. Conheça as outras opções e saiba quando aplicar cada 
        uma. Uma dica: Estude (muito) sobre orientação a objetos e não use arrays quando deveria estar utilizando objetos.
    </p>

    <p>
        Para ler mais a respeito de arrays em PHP e inclusive ver o exemplo utilizado neste último vídeo sobre os tipos de dados 
        permitidos na chave de um array você pode consultar a página sobre arrays da documentação do PHP.
    </p>
    
    <p>
        É um assunto de extrema importância, então se surgir qualquer dúvida, não deixe de perguntar aqui no fórum.
    </p>

<h3>Resumo da Aula</h3>




<p>Nessa aula, aprendemos como criar uma estrutura de dados mais complexa usando e combinando arrays associativos. Vimos e aprendemos que:</p>

<ul>
    <li>um array associativo sempre define elementos composto por uma chave e um valor</li>
    <ul>
        <li>a associação entre chave e valor é feito com =></li>
        <li>a chave funciona como um índice explicito (definido por nós)</li>
        <li>o valor pode ser um valor primitivo ou outro array</li>
        <li>a chave deve ser do tipo inteiro ou string, todos os outros tipos o PHP tenta converter</li>
    </ul>
    <li>um array associativo também é chamado de mapa ou dicionário</li>
    <li>podemos combinar um array simples e array associativo para definir estruturas mais complexas</li>
    <li>o laço foreach oferece uma forma mais expressiva de iteração</li>
    <ul>
        <li>no foreach podemos acessar o índice e o valor do elemento da iteração</li>
    </ul>
    <li>arrays podem crescer e podemos adicionar novos elementos</li>
    <li>em arrays simples, com índice numérico, basta usar [] para adicionar um elemento no final (por exemplo, $lista[] = 12;)</li>
    <ul>
        <li>nesse caso o PHP automaticamente incrementa o índice</li>
    </ul>
</ul>




</body>
</html>
