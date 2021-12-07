<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4 - Notas de Alunos</title>
</head>
<body>
    <h1>Sistema de Notas</h1>
    
    <?php
        $nota1 = 6; 
        $nota2 = 6;
        $nota3 = 6;
        $nota4 = 6;

        $media = (($nota1 + $nota2 + $nota3 + $nota4) / 4);
        //$media = avg($nota1, $nota2, $nota3, $nota4);


        $resultado = $media >= 6 && $nota1 > 4  && $nota2 > 4 && $nota3 > 4 && $nota4 > 4 ? 'Aprovado' : 'Reprovado';
        echo $resultado;
        

        // if ($media >= 6 and $nota1 > 4 and  $nota2 > 4 and $nota3 > 4 and  $nota4 > 4){
        //     echo "Aprovado ;)";
        // } else if ($media >= 1 ){
        //         echo "Recuperação";
        // } else {
        //         echo "Reprovado :(";
        // }
    ?>
</body>
</html>