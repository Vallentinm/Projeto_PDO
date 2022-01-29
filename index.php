<?php
session_start();
?>
<!DOCTYPE html>
<html>   
<head>
  <link rel="stylesheet" href="./assets/css/index.css">
  <title>Login</title>
</head> 
<body>
  <!-- Autenticar no banco -->
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
          <!-- Div do form de login--> 
  <div class="conteiner">
    <h3 class="text">Faça seu Login</h3>
    <div class="box">
      <form class="Form" action="login.php" method="POST">
               <input type="text" name="Name" placeholder="Nome do Usuário"><br><br>
               <input type="password" name="Psw" placeholder="Senha"><br><br>
                <button type="submit" >Entrar</button>
          </form>
        </div>
       <div>
  </div>
  <a class="link" href="../views/pag_cad_user.php" target="_blank"> Cadastrar-se</a>
 </div>
</body>

</html>