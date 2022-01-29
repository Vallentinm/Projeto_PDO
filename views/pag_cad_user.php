<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: white;
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
  input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }

  input[type=text]:focus, input[type=password]:focus {
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
    background-color: black;
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

  /* Add a blue text color to links */
  a {
    color: dodgerblue;
  }

  /* Set a grey background color and center the text of the "sign in" section */
  .signin {
    background-color: #f1f1f1;
    text-align: center;
  }
</style>
</head>
<body>
  <?php
    if(isset($_SESSION['nao_autenticado'])):
  ?>
  <div class="notification is-danger">
    <p>ERRO: Usuário ou senha inválidos.</p>
  </div>
  <?php
    endif;
    unset($_SESSION['nao_autenticado']);
  ?>
  <form method="POST" action="cadastrar_banco.php" name="Cadastro">
    <div class="container">

      <label for="name"><b>Nome de Usuário</b></label>
      <input type="text" id="name" placeholder="Nome de Usuário" name="name" required>

      <label for="psw"><b>Senha</b></label>
      <input type="password" placeholder="Sua Senha" id="psw" name="psw" required>

      <label for="psw-repeat"><b>Repitir Senha</b></label>
      <input type="password" id="psw_reapeat" placeholder="Repitir Senha" name="psw_repeat" required>
      <hr>
      <button type="submit" class="registerbtn">Registrar</button>
    </div>
    
    <div class="container signin">
      <p>Você ja tem uma conta ? <a href="../index.php">Acessar</a>.</p>
    </div>
  </form>
  <script>
  function validarSenha(){
    senha1 = document.Cadastro.psw.value
    senha2 = document.Cadastro.psw_repeat.value
   
    if (senha1 == senha2)
      alert("SENHAS IGUAIS")
    else
      alert("SENHAS DIFERENTES")
  }
  </script>
</body>
</html>
