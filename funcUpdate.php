<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	include_once "menu/cabecalho.inc";
?>	
</head>
<body id="main_body" >
<?php
	include_once "menu/panels.inc";
?>	
	<div class="col-md-10 col-md-offset-2">
		<form id="form_1130674" class="appnitro"  method="post" action="">
			<div class="form_description">
			<h2>Alterar funcionário</h2>
			</div>						
			<?php
		 	include_once "funcionario.class.php";
			include_once "mysql.class.php";
			$funcionario = new Funcionario();
		    $funcionario -> getSelect($funcionario);
    		?> 	
		<div class="form-group">
			<input type="hidden" name="form_id" value="1130674" />
			<input id="saveForm" class="btn btn-info btn-sm" type="submit" name="submit" value="Buscar" />
		</div> 
		<div class="form-group">
			<label class="description" for="element_1">Codigo </label>
			<input id="codigo" name="codigo" input class="form-control" placeholder="Codigo" type="text" maxlength="255" value=""/> 
		</div> 
		<div class="form-group">
			<label class="description" for="element_2">Nome </label>
			<input id="nome" name="nome" input class="form-control" placeholder="Nome" type="text" maxlength="255" value=""/> 
		</div> 
		<div class="form-group">
			<label class="description" for="element_3">Função </label>
			<input id="funcao" name="funcao" input class="form-control" placeholder="Função" type="text" maxlength="255" value=""/> 
		</div> 
		<div class="form-group">
			<label class="description" for="element_4">Email </label>
			<input id="email" name="email" input class="form-control" placeholder="Email" type="text" maxlength="255" value=""/> 
		</div> 
			<div class="form-group">
			<input type="hidden" name="form_id" value="1130674" />
			<input id="saveForm" class="btn btn-success btn-lg" type="submit" name="submit" value="Alterar" />
		</form>	
	</div>
	</body>
</html>
<?php
	include_once "funcionario.class.php";
	include_once "mysql.class.php";

	$funcionario = new Funcionario;
	$funcionario ->	setCodigoFuncionario($_POST["codigo"]);
    $funcionario -> setFuncionarioNome($_POST["nome"]);
	$funcionario -> setFuncionarioFuncao($_POST["funcao"]);
	$funcionario -> setFuncionarioEmail($_POST["email"]);	
    $funcionario ->updateFunc($funcionario); 
?>