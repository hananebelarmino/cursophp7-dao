<?php 

require_once("config.php");
/*
Carrega um usuário por ip

$root = new Usuario();

$root->loadbyId(1);

echo $root;
*/

/* 
Carrega toda a lista de usuarios 
$lista = Usuario::getList();

echo json_encode($lista);
*/

/*
Carrega o usuário pelo Login
$search = Usuario::search("F");

echo json_encode($search);
*/

/*
Buscando na tabela por login e senha
$usuario = new Usuario();
$usuario->login("user","12345");

echo $usuario;
*/

/*
Criando um novo usuário
$aluno = new Usuario("Hanane", "1212");

$aluno->insert();

echo $aluno;
*/

/*
Alterando um Usuário
$usuario = new Usuario();

$usuario->loadbyId(5);
$usuario->update("Professora","asdads@");

echo $usuario;

*/

$usuario = new Usuario();
$usuario->loadbyId(7);

$usuario->delete();
echo $usuario;
 ?>