<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4 - Avançado</title>
</head>
<body>
    <h3>Interploração e Require</h3>
    <?php
    


    ?>

    <p>Diferença entre Include e Require:  Caso o arquivo não seja encontrado, include irá lançar um aviso (E_WARNING) enquanto require irá lançar um erro e não permitirá a execução do programa. Você pode conferir mais detalhes na documentação de include e require.</p>

    <p>Resumo de aprendizado</p>        

    Nessa aula falamos sobre vários recursos da linguagem PHP.

    Primeiro vimos como usar um array associativo dentro de uma string. Aprendemos:

        para acessar um valor de um array associativo dentro de string devemos omitir as aspas da chave, por exemplo "$conta[titular]"
        e alternativamente podemos usar chaves em volta do array, por exemplo: "{$conta['titular']}"

    Também vimos que um código PHP pode ser separado em vários arquivos e orquestrar a execução podem usar include, require e require_once:

        include não dá erro (apenas avisa) se o arquivo não existe, require dá erro
        require_once garante que o arquivo será incluído apenas uma vez

    Conhecemos que existem níveis de mensagens entre eles:

        E_NOTICE, PHP dá um aviso mas "se vira" e continua com a execução
        E_ERROR, PHP dá erro e para a execução do programa


</body>
</html>