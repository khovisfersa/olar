<html>
	<body>
		<?php
			$nome = $_POST['name'];
			$endere = $_POST['ender'];
			$idade = $_POST['idade'];
			$sex = $_POST['sexo'];



			if ($idade < 18 )
				{
					echo "Menor de idade";
				}
			else
				{
				
					echo $nome;
					echo '<br>';
					echo $endere;
					echo '<br>';
					echo $idade;
					echo '<br>';
					echo $sex;
				}
			?>
	</body>
</html>