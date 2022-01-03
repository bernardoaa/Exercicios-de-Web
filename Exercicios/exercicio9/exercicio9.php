
    <?php
	//Recebendo os valores do formulario
		$nome = $_GET["n"];
		$idade = $_GET["i"];
		//Atendendo as condicoes do exercicio
		if($idade > 18){
			echo "</br>$nome e maior de 18 e tem $idade Anos";
		}else{
			echo "</br>$nome nao e maior de 18 e tem $idade Anos";
		}
	?>
	</br></br><a href="exercicio9.html">Voltar</a>
