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
			Digite a 1° nota: <input type="text"  value="" name="one"> 
            <br>
            Digite a 2° nota: <input type="text"  value="" name='two'>
			<input type="submit" name="Calcular">	
		</form>

    <?php
        $one = $_GET["one"];
        $two = $_GET["two"];
        echo ($one + $two) / 2
    ?>
</body>
</html>