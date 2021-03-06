<?php
  session_start();
  include('verifica_login.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

  body {

    font-family: Arial, Helvetica, sans-serif;

    background-color: white;

  }

  div.p{

    text-align: center;

  }



  * {

    box-sizing: border-box;

  }



  /* Add padding to containers */

  .container {

    padding: 16px;

    background-color: white;

  }



  /* Full-width input fields */

  input[type=text], input[type=password], input[type=tel] {

    width: 100%;

    padding: 15px;

    margin: 5px 0 22px 0;

    display: inline-block;

    border: none;

    background: #f1f1f1;

  }



  input[type=text]:focus, input[type=password]:focus, input[type=tel]:focus {

    background-color: #ddd;

    outline: none;

  }



  /* Overwrite default styles of hr */

  hr {

    border: 1px solid #f1f1f1;

    margin-bottom: 25px;

  }



  /* Set a style for the submit button */

  .registerbtn {

    background-color: #000000;

    color: white;

    padding: 16px 20px;

    margin: 8px 0;

    border: none;

    cursor: pointer;

    width: 100%;

    opacity: 0.9;

  }



  .registerbtn:hover {

    opacity: 1;

  }

  .navbar {

    overflow: hidden;

    background-color: #E6E6E6; 

  }



  .navbar a {

    float: left;

    font-size: 16px;

    color: black;

    text-align: center;

    padding: 14px 16px;

    text-decoration: none;

  }



  .subnav {

    float: left;

    overflow: hidden;

  }



  .subnav .subnavbtn {

    font-size: 16px;  

    border: none;

    outline: none;

    color: black;

    padding: 14px 16px;

    background-color: inherit;

    font-family: inherit;

    margin: 0;

  }



  .navbar a:hover, .subnav:hover .subnavbtn {

    background-color: #BDBDBD;

  }



  .subnav-content {

    display: none;

    position: absolute;

    left: 0;

    background-color: #D8D8D8;

    width: 100%;

    z-index: 1;

  }



  .subnav-content a {

    float: left;

    color: black;

    text-decoration: none;

  }



  .subnav-content a:hover {

    background-color: #eee;

    color: black;

  }



  .subnav:hover .subnav-content {

    display: block;

  }

   /* Come??a o estilo do contato */ 



  html {

    box-sizing: border-box;

  }



  *, *:before, *:after {

    box-sizing: inherit;

  }



  .column {

    float: left;

    width: 15%;

    margin-bottom: 16px;

    padding: 0 5px;

  }



  @media screen and (max-width: 650px) {

    .column {

      width: 100%;

      display: block;

    }

  }



  .card {

    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

  }



  .container {

    padding: 0 16px;

  }



  .container::after, .row::after {

    content: "";

    clear: both;

    display: table;

  }



  .title {

    color: grey;

  }



  .button {

    border: none;

    outline: 0;

    display: inline-block;

    padding: 8px;

    color: white;

    background-color: #000;

    text-align: center;

    cursor: pointer;

    width: 100%;

  }



  .button:hover {

    background-color: #555;

  }

</style>
</style>
</head>
<body>

  <div class="navbar">

    <a href="painel.php">Pagina Inicial</a>

    <a href="relatorio.php">Relat??rios</a>

    <div class="subnav">

      <button class="subnavbtn">Editar <i class="fa fa-caret-down"></i></button>

      <div class="subnav-content">

        <a href="#team">Perfil</a>

        <a href="#careers">Financeiro</a>

      </div>

    </div> 

    <div class="subnav">

      <button class="subnavbtn">Cadastro <i class="fa fa-caret-down"></i></button>

      <div class="subnav-content">

        <a href="cadastrar_empresa.php">Empresa</a>

        <a href="cadastroEquipamento.php">Equipamento</a>

        <a href="#deliver">Funcionario</a>

        <a href="#package">Departamento</a>

        <a href="#express">Fornecedor</a>

      </div>

    </div>

    <a href="qrcode.php">QR Code</a>

    <a href="logout.php">Sair</a>

  </div>

  <div class="p">

  <h1>CADASTRO CONCLU??DO COM SUCESSO!</h1>

  </div>

</body>

</html>

