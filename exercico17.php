<?php
// entradas - variaveis
$custoFabrica = 50000.00;
$percentualImpostos = 45;
$percentualDistribuidor = 28;

//Processamento
$valorComImpostos = $custoFabrica + ($custoFabrica * $percentualImpostos / 100);
$custoFinal = $valorComImpostos + ($valorComImpostos * $percentualDistribuidor / 100);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <h3> Atividade 17</h3>

    <p>
        O custo ao consumidor de um carro novo é a soma do custo de fábrica com os
        impostos e a porcentagem do distribuidor. Primeiro, aplique 45% de impostos
        sobre o custo de fábrica e depois aplique 28% do distribuidor sobre o resultado.
        Escreva um algoritmo que leia o custo de fábrica e informe o custo final ao
        consumidor.
        Resultado esperado: um carro com custo de fábrica de R$ 50.000,00 terá valor
        com impostos de R$ 72.500,00 e custo final ao consumidor de R$ 92.800,00.
    </p>
    <p> <?php echo ("Custo de fabrica: " . $custoFabrica);  ?> </p>
    <p> <?php echo ("Custo com impostos: " . $valorComImpostos);  ?> </p>
    <p> <?php echo ("Valor final : " . $custoFinal);  ?> </p>

</body>

</html>