<?php
// entradas - variaveis
$qtdpaozinho = 100;
$qtdbroa = 20;


//Processamento
$valorPaozinho = 0.12;
$valorBroa = 1.50;
$totalArrecadado = $valorPaozinho * $qtdpaozinho + $valorBroa * $qtdbroa;
$poupanca = $totalArrecadado * 0.10;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <h3> Atividade 22</h3>


    <p>
        A padaria Hotpão vende pães franceses e broas todos os dias. Cada pãozinho
        custa R$ 0,12 e cada broa custa R$ 1,50. Faça um algoritmo que leia a
        quantidade de pães e broas vendidas, calcule o total arrecadado e quanto deverá
        ser guardado na poupança, considerando 10% do total.
        Resultado esperado: com 100 pães e 20 broas vendidas, o total arrecadado será
        R$ 42,00 e o valor guardado na poupança será R$ 4,20.
    </p>
    <p>Quantidade de pães: <?php echo $qtdpaozinho ?> </p>
    <p>Quantidade de broas: <?php echo $qtdbroa ?> </p>
    <p> <?php echo ("Total arrecadado: " . $totalArrecadado);  ?> </p>
    <p> <?php echo ("Guardar na poupança: " . $poupanca);  ?> </p>



</body>

</html>