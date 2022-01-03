<?php
//Recebendo os valores do formulario
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];
$numero3 = $_GET["numero3"];

//Verificando a condicao da sequencia decrescente e mostrando-a
if ($numero1 > $numero2 && $numero1 > $numero3) {
    if ($numero2 > $numero3) {
        echo " " . $numero1 . " " . $numero2 . " " . $numero3;
    } else if ($numero2 < $numero3) {
        echo " " . $numero1 . " " . $numero3 . " " . $numero2;
    } else {
        echo " " . $numero1 . " " . $numero3 . " " . $numero2;
    }
} else if ($numero2 > $numero1 && $numero2 > $numero3) {
    if ($numero1 > $numero3) {
        echo " " . $numero2 . " " . $numero1 . " " . $numero3;
    } else if ($numero1 < $numero3) {
        echo " " . $numero2 . " " . $numero3 . " " . $numero1;
    } else {
        echo " " . $numero2 . " " . $numero3 . " " . $numero1;
    }
} else if ($numero3 > $numero2 && $numero3 > $numero1) {
    if ($numero1 > $numero2) {
        echo " " . $numero3 . " " . $numero1 . " " . $numero2;
    } else if ($numero1 < $numero2) {
        echo " " . $numero3 . " " . $numero2 . " " . $numero1;
    } else {
        echo " " . $numero3 . " " . $numero2 . " " . $numero1;
    }
} else {
    echo "Iguais";
}
