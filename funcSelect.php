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
			<h2>Pesquisar Funcionario</h2>
			</div>						
			<div class="form-group">
		<label class="description" for="element_1">Codigo </label>
		<div>
			<input id="codigo" name="codigo"  <input class="form-control" placeholder="Codigo" type="text" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
			
					<div class="form-group">
			    <input type="hidden" name="form_id" value="1130674" />
			    
				<input id="saveForm" class="btn btn-info btn-lg " type="submit" name="submit" value="Pesquisar" />
		</li>
		</ul>
<?php
	include_once "funcionario.class.php";
	include_once "mysql.class.php";
	$codigo=$_POST["codigo"];
	$funcionario = new Funcionario();
    $funcionario ->selectFunc($codigo); 
?>
		</form>	
		<div id="footer">

			</div>
		
	</div>
	</body>
</html>
