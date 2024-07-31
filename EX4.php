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
			Digite o 1° valor: <input type="text"  value="" name="one"> 
            <br>
            Digite o 2° valor: <input type="text"  value="" name='two'>	
            <br>
            Digite o 3° valor: <input type="text"  value="" name='three'>
            <br>
			<input type="submit" name="Calcular">	
		</form>

        <?php
        $one = $_GET["one"];
        $two = $_GET["two"];
        $three = $_GET["three"];
        echo "o resultado é",  $one + $two + $three;

        ?>
</body>
</html>