
	<?php
	//Recebendo os valores do formulario
	$nome = $_GET["n"];
	$s = $_GET["sexo"];
	$idade = $_GET["i"];

	//Verificando as condicoes do exercicio
	if ($s == "Mulher" && $idade < 25) {
		echo "</br>$nome ACEITA";
	} else {
		echo "</br>$nome NÃO ACEITA";
	}
	?>
	</br></br><a href="exercicio11.html">Voltar</a>
