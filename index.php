<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

/*$root = new Usuario();
$root->loadById(4);

echo $root;*/

/*$lista = Usuario::getList();

echo json_encode($lista);*/

/*$search = Usuario::search("root");

echo json_encode($search);*/

$usuario = new Usuario();
$usuario->login("josee","123456789");

echo $usuario;

 ?> 