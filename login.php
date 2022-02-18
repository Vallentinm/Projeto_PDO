<?php
session_start();
include('./Config/con_banco.php');

if(empty($_POST['Name']) || empty($_POST['Psw'])) {
	header('Location:/login');
	exit();
}
 
$usuario = mysqli_real_escape_string($conexao, $_POST['Name']);
$senha = mysqli_real_escape_string($conexao, $_POST['Psw']);
 
/* Aqui é o select no banco, lembra desse karalho por favor!!!*/
$query = "SELECT * FROM serv.userdb where USER = '{$usuario}' and PSW = '{$senha}'";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);
 /*Valida se tem o usuario no banco e da a mensagem maravilhosa de usuario ou sneha invalidos
*/
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: ../views/painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location:/login');
	exit();
}
?>