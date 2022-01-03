
<?php include '../layouts/head.php'; ?>

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

    <p> Desta forma, o endereço da variável $variavel será recebido na função minhaFuncao. Qualquer alteração em $meuParametro dentro da função refletirá na variável original que foi passada ($variavel). Para uma explicação mais completa (e complexa), acesse a documentação </p>

    <h3>  A função List </h3>

    <p>Pegar valores de um array em uma váriavel separada</p>

    <?php

    $idadeList = [21, 23, 19, 25, 30, 41, 18];

    list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;

    echo $idadeList;
    
    ?>

    <p>
    Esse list() não traz novas funcionalidades, afinal tudo que conseguimos fazer com ele, também é possível fazer sem. Essa é só uma forma mais elegante de passar os valores de um array para variáveis separadas, que é exatamente o que fizemos no exemplo acima. 
    </p>

<?php include '../layouts/rodape.php' ?>