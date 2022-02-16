<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/cad_emp.css">
  <link rel="stylesheet" href="../assets/css/Padrao.css">
</head>
<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
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
  <div class="p">
      <h1>Registro de Empresa</h1> </div>
  <form method="POST" action="cad_emp_banco.php" class="center-form">
    <div class="container">

      <label for="nome_empresa"><b>Nome da empresa</b></label><br>
      <input type="text" id="nome" placeholder="Nome da empresa" name="nome" required/><br/>

      <label for="cnpj"><b>CNPJ</b></label><br>
      <input type="text" id="cnpj" maxlength="" placeholder="xx.xxx.xxx/xxxx-xx" name="cnpj" required/><br/>

      <label for="cnpj"><b>IE</b></label><br>
      <input type="text" id="IE" maxlength="" placeholder="xxx.xxx.xxx.xxx" name="IE" required/><br/>

      <label for="telefone"><b>Telefone de contato</b></label><br>
      <input type="tel" id="telefone" placeholder="(xx) xxxx-xxxx" name="telefone"/><br/>

      <label for="cep"><b>CEP</b></label><br>
      <input type="text" id="cep" placeholder="xxxx-xxxx" name="cep" maxlength="9" minlength="8" required/><br/>

      <div class="p">
      <label for="Endereco"><b><h2>Endereço</h2></b></label><br></div>

      <label for="logradouro"><b>Logadouro</b></label><br>
      <input type="text" id="logradouro" placeholder="logradouro" name="logradouro" required/><br/>

      <label for="Numero"><b>Numero</b></label><br>
      <input type="text" id="Numero" placeholder="Numero" name="Logadouro" required/><br/>

      <label for="cidade"><b>Cidade</b></label><br>
      <input type="text" id="cidade" placeholder="Numero" name="Numero" required/><br/>

      <label for="bairro"><b>Bairro</b></label><br>
      <input type="text" id="bairro" placeholder="Endereço" name="bairro" required/><br/>

      <label for="UF"><b>UF</b></label><br>
      <select id="uf" name="uf" name="uf">
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espírito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
      </select>
      <button type="submit" class="registerbtn">Registrar</button>
    </div>
  </form>	

  <script type="text/javascript">
	$("#cep").focusout(function(){
		//Início do Comando AJAX
		$.ajax({
			//O campo URL diz o caminho de onde virá os dados
			//É importante concatenar o valor digitado no CEP
			url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
			//Aqui você deve preencher o tipo de dados que será lido,
			//no caso, estamos lendo JSON.
			dataType: 'json',
			//SUCESS é referente a função que será executada caso
			//ele consiga ler a fonte de dados com sucesso.
			//O parâmetro dentro da função se refere ao nome da variável
			//que você vai dar para ler esse objeto.
			success: function(resposta){
				//Agora basta definir os valores que você deseja preencher
				//automaticamente nos campos acima.
				$("#logradouro").val(resposta.logradouro);
				$("#complemento").val(resposta.complemento);
				$("#bairro").val(resposta.bairro);
				$("#cidade").val(resposta.localidade);
				$("#uf").val(resposta.uf);
				//Vamos incluir para que o Número seja focado automaticamente
				//melhorando a experiência do usuário
				$("#numero").focus();
			}
		});
	});
</script>
<script>
</body>
</html>