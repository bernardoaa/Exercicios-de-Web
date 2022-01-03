
	<?php
	//Recebendo os dados do formulario
	$numero = $_GET["num"];
//Verificando o sinal
	if ($numero > 0) {
		echo "Valor Positivo";
	} else if ($numero < 0) {
		echo "Valor Negativo";
	} else {
		echo "Igual a Zero";
	}
	?>
	</br></br><a href="exercicio1.html">Voltar</a>
