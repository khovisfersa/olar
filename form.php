<html>
	<head>
		<title>Esse é o titulo dessa bagaça, Coroi</title>
	</head>
	<body>
    <table border = '1'>
		  <thead>
		  	<tr>
		  		<th>elemento</th>
		  		<th>dia da semana</th>
		  		<th>prato do dia</th>
		  		<th> preço </th>
		  	</tr>
		  </thead>
  		<tbody>
  			<?php 
  				$diaDaSemana = ['domingo', 'segunda', 'terca' ,'quarta', 'quinta' , 'sexta', 'sabado'];
  				$elemento = ['0', '1', '2', '3', '4', '5', '6'];
  				$pratoDoDia = ['arroz', 'feijao', 'mandioca braba', 'rapadra com oregano', 'mato', 'little kill', 'sua mãe'];
  				$preco = ['10', '20', '30', '40', '50', '60', 'gratis'];
				

  				foreach (range(0,6) as $elemento ) 
  				{
  					echo '<tr>' ;
  					echo '<td>'.$elemento.'</td>';
  					echo '<td>'.$diaDaSemana[$elemento].'</td>';
  					echo '<td>'.$pratoDoDia[$elemento].'</td>';
  					echo '<td>'.$preco[$elemento].'</td>';
  					echo '</tr>';
	  			}

	  			echo "Hoje é ".$diaDaSemana[date('w')].". O prato de hoje é: ".$pratoDoDia[date('w')]." agorista, e custa míseros: ".$preco[date('w')];
          echo "aceitamos bitcoin";
	  		?>
	  	</tbody>
    </table>
	</body>
</html>