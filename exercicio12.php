<?php 
// entradas - variaveis
$nota1 = 7;
$nota2 = 8;
$nota3 = 6;
$nota4 = 9;

//Processamento
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

<h3> Atividade 1</h3>

<p>
Desenvolva um algoritmo que leia 4 notas e calcule a média, apresentando o
resultado na tela. (Pesquise a fórmula)
Resultado esperado: as notas 7, 8, 6 e 9 resultam em média 7,5.

</p>
<p> <?php echo ("Media: " . $media);  ?> </p>


</body>
</html>