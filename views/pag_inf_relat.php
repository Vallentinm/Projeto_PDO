<?php
session_start();
include('veri_login.php');
include('con_banco.php');
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../assets/css/inf_itens.css">
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

  <div class="p"><h2>Selecione o Relatorio desejado</h2>
  </div>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'empresas')" id="defaultOpen">Empresas Cadastradas</button>
  <button class="tablinks" onclick="openCity(event, 'usuarios')">Usuarios</button>
  <button class="tablinks" onclick="openCity(event, 'dep')">Setor</button>
  <button class="tablinks" onclick="openCity(event, 'Equipamento')">Equipamentos</button>
</div>

<div id="Equipamento" class="tabcontent">
    <table >
      <th>S/N</th>
      <th>Codigo Interno</th>
      <th>Departamento</th>
      <th>Nome</th>
      <th>QR Code</th>
      <?php
      $result_usuarios = "select * from equipamento";
      $resultado_usuarios = mysqli_query($conexao, $result_usuarios);
      while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
        echo "<tr><td>".$row_usuario['sn']."</td>";
        echo "<td>".$row_usuario['cod_interno']."</td>";
        echo "<td>".$row_usuario['setor']."</td>";
        echo "<td>".$row_usuario['nome']."</td>";
      }
      ?>
       Gerar QR</td>
    </table>
  </div>

<div id="empresas" class="tabcontent">
    <table >
      <th>Empresa</th>
      <th>Cnpj</th>
      <th>Telefone</th>
      <th>Cidade</th>
      <th>Bairro</th>
      <th>UF</th>
      <th>CEP</th>
      <?php
      $result_usuarios = "select * from empresa";
      $resultado_usuarios = mysqli_query($conexao, $result_usuarios);
      while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
        echo "<tr><td>".$row_usuario['nome']."</td>";
        echo "<td>".$row_usuario['cnpj']."</td>";
        echo "<td>".$row_usuario['telefone']."</td>";
        echo "<td>".$row_usuario['cidade']."</td>";
        echo "<td>".$row_usuario['bairro']."</td>";
        echo "<td>".$row_usuario['uf']."</td>";
        echo "<td>".$row_usuario['cep']."</td>";
      }
      ?>
    </table>
  </div>

<div id="usuarios" class="tabcontent">
      <table>
      <th>Nome</th>
      <th>Senha</th>
      <?php
      $result_usuarios = "select * from usuario";
      $resultado_usuarios = mysqli_query($conexao, $result_usuarios);
      while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
        echo "<tr><td>".$row_usuario['usuario']."</td>";
        echo "<td>".$row_usuario['senha']."</td>";
      }
      ?>
      <td> <a href="sucesso.php"> QR</td>
    </table>
  </div>

<div id="dep" class="tabcontent">
   <table>
      <th>Codigo</th>
      <th>Nome</th>
      <?php
      $result_usuarios = "select * from centro_custo";
      $resultado_usuarios = mysqli_query($conexao, $result_usuarios);
      while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
        echo "<tr><td>".$row_usuario['cod']."</td>";
        echo "<td>".$row_usuario['nome']."</td>";
      }
      ?>
    </table>
  </div>

<script>
function chama(link)
{
window.location.href = 'sucesso.php';
}
</script>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
