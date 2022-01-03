
    <?php
	//Recebendo os dados do formulário 
		$nome = $_GET["n"];
		$cat = $_GET["c"];
		//Validacao
		if($cat == "Professor"){
			echo "</br>Tens 10 dias para devolver o livro!";
		}else{
			echo "</br>Tens 3 dias para devolver o livro!";
		}
	?>
	</br></br><a href="exercicio14.html">Voltar</a>