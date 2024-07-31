<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <form name='din' method="get">
        digite o salário: <input type="text" name= "sal">
            <input type="submit" name="Calcular">
    </form>

    <?php

    $sal = $_GET["sal"];
     if( $sal < 500){
        echo $sal + ($sal/100) * 15;
     }
     if($sal >= 500 && $sal <= 1000){
        echo $sal + ($sal/100) * 10;
     }
     if($sal > 1000){
        echo $sal + ($sal/100) * 5;
     }

    ?>

<body>
    
</body>
</html>