<?php
// entradas - variaveis
$qtdCavalos = 12;
$qtdpatas= 4;

//Processamento
$qtdferraduras = $qtdCavalos * $qtdpatas; 


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <h3> Atividade 21</h3>


    <p>
        Faça um algoritmo para calcular quantas ferraduras são necessárias para
        equipar todos os cavalos comprados para um haras.
        Resultado esperado: para 12 cavalos, serão necessárias 48 ferraduras.

    </p>
    <p> <?php echo ("Quantidade de cavalos: " . $qtdCavalos);  ?> </p>
    <p> <?php echo ("Quantidade de ferraduras: " . $qtdferraduras);  ?> </p>



</body>

</html>