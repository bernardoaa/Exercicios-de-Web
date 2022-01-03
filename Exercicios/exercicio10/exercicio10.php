
	<?php
//Recebendo os valores do formulario
$n = $_GET["num"];

//Verificando o respectivo mêss
	if ($n == 1) {
		echo "</br>Janeiro";
	} else if ($n == 2) {
		echo "</br>Fevereiro";
	} else if ($n == 3) {
		echo "</br>Marco";
	} else if ($n == 4) {
		echo "</br>Abril";
	} else if ($n == 5) {
		echo "</br>Maio";
	} else if ($n == 6) {
		echo "</br>Junho";
	} else if ($n == 7) {
		echo "</br>Julho";
	} else if ($n == 8) {
		echo "</br>Agosto";
	} else if ($n == 9) {
		echo "</br>Setembro";
	} else if ($n == 10) {
		echo "</br>Outubro";
	} else if ($n == 11) {
		echo "</br>Novembro";
	} else if ($n == 12) {
		echo "</br>Dezembro";
	} else {
		echo "</br>Nao existe mes com esse numero";
	}
	?>
	</br></br><a href="exercicio10.html">Voltar</a>
