<?php
// entradas - variaveis
$valorReais = 500.00;
$cotacaoDolar = 5.00;

//Processamento
$valorDolares= $valorReais / $cotacaoDolar;

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
        Faça um algoritmo que realize uma operação cambial. O turista deve informar
        o valor que possui em reais e a cotação do dólar naquele dia. O algoritmo deverá
        converter o valor para dólares.
        Resultado esperado: com R$ 500,00 e cotação do dólar a R$ 5,00, o turista terá
        US$ 100,00.

    </p>
    <p> <?php echo ("Valor em reais: R$ " . $valorReais);  ?> </p>
    <p> <?php echo ("Cotação do dolar no dia: R$ " . $cotacaoDolar);  ?> </p>
    <p> <?php echo ("Valor convertido: US$ " . $valorDolares);  ?> </p>



</body>

</html>