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

$aluno = new Usuario();

$aluno->setDeslogin("fryda");
$aluno->setDessenha("biscoito");

$aluno->insert();

echo $aluno;


?>