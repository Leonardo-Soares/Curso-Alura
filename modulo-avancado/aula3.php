<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 - Avançado</title>
</head>
<body>
    <h3> Subrotinas </h3>

    <?php

    function mensagem($valormensagem)
    {
        echo $valormensagem;
    }

    mensagem("teste de subrotinas");

    ?>

    <p>Ou seja, uma <b>subrotina</b> apenas executa um código de forma isolada, sem retornar nenhum valor. </p>


    <h3> Funções </h3>

    <?php
    
    function adiciona2($valor)
    {
        return $valor + 2; // retorno do parâmetro
    }

    $resultado = adiciona2(25); // envio do parâmetro para a função fazer o processamento 
    echo "Resultado somando 2 com :  $resultado";
    
    ?>

    <p> A função pode receber mais de um parâmentro separados por vírgula </p>
    <p> Ex: $valor =  nomeFuncao(10, 121212, "teste") </p>

    <h3>Função x Subrotina</h3>
    <p>
        Uma <b>função</b> retorna um valor, ou seja, a chamada da função representa um valor após sua execução. Uma subrotina apenas executa um código isolado.
        <br/>
        A chamada de uma função no código passa a representar o valor que ela retorna. Com isso, podemos atribuir o retorno de uma função a uma variável, por exemplo, ou até mesmo exibí-lo. 
        <br/>
        Já uma <b>subrotina</b> apenas executa um código de forma isolada, sem retornar nenhum valor.
    </p>

    <p>
        <b>Obs:</b> Podemos especificar o tipo de dado dos parametros que será recebido pela função.
    </p>

    <h3>O que apredemos (ou deveria ): </h3>
        
    Nessa aula falamos sobre função! 
    <br/>
    Aprendemos:
    <ul>
        <li> uma função encapsula uma funcionalidade/um código; </li>
        <li> uma função usa a palavra chave function, possui um nome, pode ter parâmetros, tem um corpo e pode ter um retorno; </li>
        <li> para chamar uma função usamos o nome dela passando o valor dos parâmetros; </li>
        <li> uma função pode especificar os tipos na declaração do parâmetro (a partir da versão 7), como também o tipo do retorno; </li>
    </ul>
    
</body>
</html>
