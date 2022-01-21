<?php
  include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Cadastro amem Funcionarios</title>
</head>
<body>
	<div class="navbar">
  <a href="painel.php">Pagina Inicial</a>
  <a href="painf_inf_relat.php">Relatórios</a>
  <div class="subnav">
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Cadastro <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="pag_cad_emp.php">Empresa</a>
      <a href="pag_cad_equip.php">Equipamento</a>
      <a href="pag_cad_func.php">Funcionario</a>
      <a href="pag_cad_cc.php">Departamento</a>
      <a href="#express">Fornecedor</a>
    </div>
  </div>
  <a href="qrcode.php">QR Code</a>
  <a href="logout.php">Sair</a>
</div>
	<div class="p"><h2>Cadastro de Funcionário</h2></div>
	<form class="center-form" method="POST" action="cadastro_funcionario">

		<label for="nome_funcionario"><b>Nome do Funcionário</b></label>
		<input type="text" name="nome" required>

		<label</label>
		
	</form>
</body>
</html>