<?php
session_start();
include('con_banco.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location:index.php');
	exit();
}
 
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
 
/* Aqui é o select no banco, lembra desse karalho por favor!!!*/
$query = "SELECT * FROM patrimon_dados.usuario where nome = '{$usuario}' and senha = '{$senha}'";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);
 /*Valida se tem o usuario no banco e da a mensagem maravilhosa de usuario ou sneha invalidos
*/
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location:index.php');
	exit();
}
?>