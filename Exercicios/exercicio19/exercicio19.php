<?php
//Recebendo os valores do formulário
$nomeCartao = $_POST["nomeCartao"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$data = $_POST["data"];
//Imprimindo o recibo
echo "Nome: ".$nome. "<br> Senha: ".$senha."<br>Email: ".$email."<br>Data: ".$data."<br>Bandeira do cartão: ".$nomeCartao;

?>