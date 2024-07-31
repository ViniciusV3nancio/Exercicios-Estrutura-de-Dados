<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name= "soma"action="" method="get">

    digite um número:  <input type="text" name= "num">
    <br>
    digite um número:  <input type="text" name= "num1">
    <br>
    <input type="submit" name="Calcular">

    </form>

    <?php

    $num= $_GET['num'];
    $num1= $_GET['num1'];

    echo $num, ' e ', $num1;
    echo '<br>';
    echo 'a soma dos numeros é:', $num + $num1;
    echo '<br>';
    echo 'a subtração dos números é: ', $num - $num1;
    echo '<br>';
    echo 'a multiplicação dos números é: ', $num * $num1;
    echo '<br>';
    echo 'a divisão dos números é: ', $num / $num1;

    ?>


</body>
</html>