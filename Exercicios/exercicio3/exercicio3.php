
	<?php
	//Recebendo os dados do formulario
	$fat = 1;
	$n = $_GET["num"];
	$c = $n;

	echo "</br>Entrada = $n";
	echo "</br>Processamento: ";
//Imprimindo o fatorial
	for ($i = $c; $i >= 1; $i--) {
		$fat =  $fat*$i;
		if($i>1){
			echo  $i."*";
		}
		else{
			echo $i;
		}
	}
	// while($c >= 1){
	// 	$fat = $fat*$c;
	// if($i>1){
	// 	echo  $i."*";
	// }
	// else{
	// 	echo $i;
	// }
	// }

	echo "</br>Saida: $fat";
	?>
	</br></br><a href="exercicio3.html">Voltar</a>
