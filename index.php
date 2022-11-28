<?php

require_once("config.php");

/*$sql = new Banco();

$usuarios = $sql -> select("SELECT * FROM tb_usuarios");

//foreach ($usuarios)

//print_r($usuarios);


echo json_encode($usuarios);*/
// carrega um usuário
/*$saldanha = new Usuario();
$saldanha -> loadById(5);
echo $saldanha; */

//carrega uma lista de usuários
/*$lista = Usuario::getList();

echo json_encode($lista); */

/*// Carrega uma lista de usuários buscando pelo login
$busca = Usuario::search("er");

echo json_encode($busca); */

//Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario -> login("saldanha","123456789");

echo $usuario;


?>