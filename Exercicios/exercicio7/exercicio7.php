
    <?php
	//Recebendo os dados e verificando o maior
		$n1 = $_GET["num1"];
		$n2 = $_GET["num2"];
		
		if($n1 > $n2){
			echo "</br>$n1 maior que $n2";
		}else if($n1 < $n2) {
			echo "</br>$n1 menor que $n2";
		}else{
			echo "Numeros iguais";
		}
	?>
	</br></br><a href="exercicio7.html">Voltar</a>
