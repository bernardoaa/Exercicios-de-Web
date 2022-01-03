<?php
//Recebendo os valores do formulario
$login = $_POST["login"];
$senha = $_POST["senha"];
//Confirmando os requisitos que Docente deu
if($login == "etec" && $senha == "informática")
{
    echo "Logado com sucesso";
}

?>