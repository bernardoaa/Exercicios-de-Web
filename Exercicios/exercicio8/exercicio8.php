<?php
//Recebendo os valores do formulario e pondo-os no array
$notas["nota1"] = $_GET["nota1"] ;
$notas["nota2"] = $_GET["nota2"] ;
$notas["nota3"] = $_GET["nota3"] ;

//Calculando a media
$media =($notas["nota1"]+$notas["nota2"]+$notas["nota3"])/3;
 //Pondo as condicoes
if($media>=6){
echo "Aprovado ";
}
else{
    echo "Reprovado ";
}
echo "<br/>Media: ".$media;
