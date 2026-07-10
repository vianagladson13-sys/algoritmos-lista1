<?php
// entradas - variaveis
$numeroInteiro = 15;
//Processamento
$antecessor = $numeroInteiro - 1;
$sucessor = $numeroInteiro + 1;


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <h3> Atividade 20</h3>


    <p>
        Faça um algoritmo que leia um número inteiro e imprima seu sucessor e seu
        antecessor.
        Resultado esperado: o número 15 terá antecessor 14 e sucessor 16.

    </p>
    <p> <?php echo ("Antecessor: " . $antecessor);  ?> </p>
    <p> <?php echo ("Sucessor: " . $sucessor);  ?> </p>



</body>

</html>