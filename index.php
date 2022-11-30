<?php

require_once("config.php");

/*$sql = new Banco();

$usuarios = $sql -> select("SELECT * FROM tb_usuarios");
//foreach ($usuarios)
//print_r($usuarios);
echo json_encode($usuarios);*/

//Carrega um usuário
//$saldanha = new Usuario();
//$saldanha -> loadById(5);
//echo $saldanha;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login
//$busca = Usuario::search("er");
//echo json_encode($busca); 

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario -> login("saldanha","123456789");
//echo $usuario;

//Insert de um usuário novo
//$user = new Usuario();
//$user -> setDeslogin("dauphine");
//$user -> setDessenha("fianne2002");
//$user -> insert();
//echo $user;

//Update em um usuário
//$user = new Usuario();
//$user -> loadById(15);
//$user -> update("dianedark", "fianne155!");
//echo $user;

//Delete de um usuário
$user = new Usuario();
$user -> loadById(7);
$user -> delete();
echo $user;

?>