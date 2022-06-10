<?php


require_once("config.php");

//Carrega um susuario
//$root = new Usuario();
//$root->loadById(6);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista)

//Carrega uma lista de usuário buscando pelo login
//$search = Usuario::search("he");
//echo json_encode($search)

//Carrega um usuário usando o login e senha
//$usuario = new Usuario();
//$usuario->login("Helena", "122004");
//echo $usuario;

//Criando um novo usuario
//$aluno = new Usuario("ricardo", "@#4567");
//$aluno->insert();
//echo $aluno;

//Update Usuário
$usuario = new Usuario();
$usuario->loadById(12);
$usuario->update("Marisa", "44444444")

echo $usuario;


?>