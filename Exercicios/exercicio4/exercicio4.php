<?php
//Recebendo os dados do formulario
$opcao = $_GET["Operador"];
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];
//Verificando a operacao e aplicando-a
switch ($opcao) {
    case 'sub':
        echo $numero1 - $numero2;
        break;
    case "mult":
        echo $numero1 * $numero2;
        break;
    case "div":
        if ($numero2 == 0) {
            echo "Indefinido";
        } else {
            echo $numero1 / $numero2;
        }
        break;
    case "adic":
        echo $numero1 + $numero2;
        break;
    default:
        echo "Nao foi escolhido nenhum numero";
}
