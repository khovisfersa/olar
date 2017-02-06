<html>
	<body>
		<?php
			$in1 = $_POST['input1'];
			$in2 = $_POST['input2'];
			$op = $_POST['oper'];
		

			if( $op == 'soma')
				echo $in1 + $in2;
			if($op == 'sub')
				echo $in1 - $in2;
			if($op == 'mult')
				echo $in1*$in2;
			if($op == 'div')
				echo $in1/$in2;
		?>
	</body>
</html>