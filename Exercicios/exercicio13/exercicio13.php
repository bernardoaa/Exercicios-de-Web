
	<?php
	//Recebendo os valores do formulario
	$lado1 = $_GET["l1"];
	$lado2 = $_GET["l2"];
	$lado3 = $_GET["l3"];

	//Verificando as igualdades dos lados e aplicando a classificacao 
	if ($lado1 == $lado2 && $lado1 == $lado3) {
		echo "</br>E um triangulo EQUILATERO!";
	} else if (($lado1 == $lado2 && $lado2 != $lado3) || ($lado1 != $lado2 && $lado2 == $lado3) || ($lado1 != $lado2 && $lado1 == $lado3)) {
		echo "</br>E um triangulo ISOSCELES!";
	} else if ($lado1 != $lado2 && $lado1 != $lado3 && $lado2 != $lado3) {
		echo "</br>E um triangulo ESCALENO!";
	}

	?>
	</br></br><a href="exercicio13.html">Voltar</a>
