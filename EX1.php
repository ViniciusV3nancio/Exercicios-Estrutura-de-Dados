<!DOCTYPE html>
	<body>  
		<form name="form" method="get">
			Digite um número de 1 a 10: <input type="text"  value="" name="numero">
			<input type="submit" name="Calcular">	
		</form>
		<?php 
			$numero = $_GET['numero'];
			if ($numero > 0 and $numero < 11)
			{
				for($cont = 0; $cont < 11; $cont++)
				{
					echo " $numero x $cont = ".$cont*$numero. "<br>";
				}
			}
		?>
	</body>
</html>