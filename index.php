<?php
session_start();
require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/assets/css/index.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>Login</title>
  </head> 
<body>
<!-- <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->
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
      <form class="Form" action="/painel" method="POST">
               <input type="text" name="Name" placeholder="Nome do Usuário"><br><br>
               <input type="password" name="Psw" placeholder="Senha"><br><br>
                <button type="submit" >Entrar</button>
          </form>
        </div>
       <div>
  </div>
  <a class="link" href="/painel" target="_blank"> Cadastrar-se</a>
 </div>
</body>

</html>