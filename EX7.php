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
			Digite um número <input type="text"  value="" name="numero">
			<input type="submit" name="Calcular">	
		</form>
		<?php 
			$numero = $_GET['numero'];
  if($numero % 2 == 0) {
    echo $numero . ' par';
  } else {
    echo $numero . ' ímpar';
  }
?>
</body>
</html>