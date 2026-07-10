<?php
// entradas - variaveis
$anoNascimento = 2000;
$anoAtual = 2026;
$anoFuturo = 2028;

//Processamento
$idadeAtual = $anoAtual - $anoNascimento ;
$idade2028 = $anoFuturo - $anoNascimento ;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <h3> Atividade 19</h3>
    

    <p>
        Faça um algoritmo que receba o ano de nascimento de uma pessoa, calcule e
        mostre a idade atual dessa pessoa e quantos anos ela terá em 2028.
        Resultado esperado: uma pessoa nascida em 2000 terá 26 anos em 2026 e 28
        anos em 2028.

    </p>
    <p> <?php echo ("Idade atual: " . $idadeAtual);  ?> </p>
    <p> <?php echo ("Idade em 2028: " . $idade2028);  ?> </p>
   


</body>

</html>