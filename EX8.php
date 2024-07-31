<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--8. Crie uma variável com valor inicial 0, enquanto o valor dessa variável foi igual ou menor que 10, 
exiba em tela o próprio valor da variável. 
A cada execução, a mesma deve ter seu valor atualizado, incrementado em uma unidade.  -->
        
<form name="form" method="get">
    Digite um número de 1 a 10: <input type="text"  value="" name="num">
    <input type="submit" name="Calcular">	
</form>

<?php
$num= $_GET["num"];
while($num <= 10){
    echo "$num";
    $num++;
}
?>
</body>
</html>