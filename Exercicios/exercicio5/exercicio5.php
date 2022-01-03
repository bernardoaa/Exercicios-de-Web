<?php
//Rebendo os dados e verificando a condicao de paridade
$numero = $_GET["numero"];
if($numero % 2 == 0){
    echo "Numero par";
}
else{
    echo "Numero impar";
}
?>