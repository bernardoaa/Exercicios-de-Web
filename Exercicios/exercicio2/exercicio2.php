<?php
//Recebendo os dados do formulario
$numero= $_GET["numero"];
//Imprimindo os valores em forma de tabuada
for($i=0;$i<=10;$i++){
    echo $numero."*".$i." = ".$numero*$i."<br>";
}

?>