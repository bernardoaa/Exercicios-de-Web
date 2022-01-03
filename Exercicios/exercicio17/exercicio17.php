<?php
//Recebendo os valores do formulario 
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];
$numero3 = $_GET["numero3"];

//Verificando as condicoes pedidas(Imprimindo de forma decrescente)
if ($numero1 > $numero2 && $numero1 > $numero3) {
    echo  $numero1 . " é maior";
} else if ($numero2 > $numero1 && $numero2 > $numero3) {
    echo $numero2 . " é maior";
} else if ($numero3 > $numero2 && $numero3 > $numero1) {
    echo $numero3 . " é maior";
} else if ($numero1 == $numero2 && $numero1 > $numero3) {
    echo $numero1 . " é maior";
} else if ($numero1 == $numero2 && $numero1 > $numero3) {
    echo $numero1 . " é maior";
} else if ($numero3 == $numero2 && $numero3 > $numero1) {
    echo $numero3 . " é maior";
} else if ($numero1 == $numero3 && $numero1 > $numero2) {
    echo $numero1 . " é maior";
}
else {
    echo "São iguais";
}

