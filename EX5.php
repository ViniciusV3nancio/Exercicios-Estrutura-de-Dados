<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form name="form" method="get">
			Digite o valor:  
            <br>
            <input type="text"  value="" name="val"> 
            <br>
            Digite a porcentagem de desconto:  
            <br>
            <input type="text"  value="" name='des'>
            <br>
			<input type="submit" name="Calcular">	
		</form>

    <?php

        $val = $_GET["val"];
        $des = $_GET["des"];
        
        echo 'valor do desconto: ' .($val / 100) * $des;
        echo '<br>';
        echo 'valor a pagar: ' .    $val - ($val / 100) * $des;


    ?>    
    
</body>
</html>