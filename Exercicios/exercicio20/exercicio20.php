<?php

//Recebendo a cor que o usuario escolher
$cor = $_POST["cor"];
//Mudando o estilo da pagina inteira
echo "<body style='background:$cor;'></body>";
?>