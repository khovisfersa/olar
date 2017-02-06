<html>
	<body>
		<?php
			$format = $_POST['format'];
			$cor = $_POST['cor'];
			$repet = $_POST['repet'];
			$tam = $_POST['tam'];
			$text = $_POST['texto'];

			foreach (range (1 , $repet) as $treta)
			{
				echo "<font color = $cor><h$tam align = $format>$text</h$tam></font>";
			}
		?>
	</body>
</html>