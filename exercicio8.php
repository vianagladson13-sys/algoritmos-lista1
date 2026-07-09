<?php
// entradas - variaveis
$qtdbrindes = 500;
$qtdequipes = 25;

//Processamento
$resultado = $qtdbrindes / $qtdequipes

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <h3> Atividade 8</h3>

    <p>
        Uma empresa pretende distribuir 500 brindes igualmente entre 25 equipes
        participantes de uma competição. Calcule quantos brindes cada equipe
        receberá.
        Resultado esperado: 500 brindes divididos entre 25 equipes resultam em 20
        brindes para cada equipe.

    </p>
    <p> <?php echo ("Brindes por equipe: " . $resultado);  ?> </p>


</body>

</html>