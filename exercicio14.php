<?php
// entradas - variaveis
$precoProduto = 200;
$percentualDesconto = 9.5;

//Processamento
$valorDesconto = $precoProduto * ($percentualDesconto / 100);
$valorFinal = $precoProduto - $valorDesconto;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <h3> Atividade 14</h3>

    <p>
        Faça um algoritmo que receba o valor de um produto, calcule um desconto de
        9,5% e apresente o novo valor com desconto.
        Resultado esperado: um produto de R$ 200,00 com desconto de 9,5% terá
        desconto de R$ 19,00 e valor final de R$ 181,00.


    </p>
    <p> <?php echo ("Valor do produto: R$ " . $precoProduto);  ?> </p>
    <p> <?php echo ("Valor do desconto: R$ " . $valorDesconto);  ?> </p>
    <p> <?php echo ("Valor final: R$ " . $valorFinal);  ?> </p>



</body>

</html>