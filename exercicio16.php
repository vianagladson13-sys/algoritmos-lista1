<?php
// entradas - variaveis
$produtoCusto = 100.00;
$porcentagemAumento = 30;


//Processamento
$valorVenda = $produtoCusto + ($produtoCusto * $porcentagemAumento / 100);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <h3> Atividade 15</h3>

    <p>
        Faça um algoritmo que receba o preço de custo de um produto e mostre o valor
        de venda. O usuário deve informar em quanto por cento deseja aumentar o valor
        do produto.
        Resultado esperado: um produto com custo de R$ 100,00 e aumento de 30% terá
        valor de venda de R$ 130,00.
    </p>
    <p> <?php echo ("Custo do produto: R$ " . $produtoCusto);  ?> </p>
    <p> <?php echo ("Porcentagem de aumento: " . $porcentagemAumento);  ?> </p>
    <p> <?php echo ("Valor de venda: R$ " . $valorVenda);  ?> </p>



</body>

</html>