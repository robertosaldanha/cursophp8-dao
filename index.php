<?php

require_once("config.php");

$sql = new Banco();

$usuarios = $sql -> select("SELECT * FROM tb_usuarios");

//foreach ($usuarios)

//print_r($usuarios);


echo json_encode($usuarios);


?>