<?php 
// entradas - variaveis
$camiseta = 50.00;
$calca = 120.00;
$tenis = 230.00;

//Processamento
$valorTotal = $camiseta + $calca + $tenis ;
$prestacao = $valorTotal/5 ;


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

<h3> Atividade 13</h3>

<p>
Uma loja vende seus produtos em 5 prestações sem juros. Faça um algoritmo
que receba o nome e o valor de 3 produtos, calcule o valor total da compra e
mostre o valor de cada prestação.
Resultado esperado: uma compra com camiseta de R$ 50,00, calça de R$ 120,00
e tênis de R$ 230,00 terá total de R$ 400,00 e 5 prestações de R$ 80,00.

</p>
<p> <?php echo ("Valor da compra: " . $valorTotal);  ?> </p>
<p> <?php echo ("Prestações: " . $prestacao);  ?> </p>


</body>
</html>