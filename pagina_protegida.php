<html>
	<body>
		<?php
		$user = $_POST['nome'];
		$login = $_POST['login'];
		$senha = $_POST['senha'];

		if ($login == 'user' AND $senha == 'senhateste' AND $user != null)
		{
			echo "bem vindo ".$user."! Seu cargo é algum. só não sei qual. <br>";
		}
		else
		{
			echo "usuario OR senha incorretos. Tente novamente.";
		}

		?>
	</body>
</html>