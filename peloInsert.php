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
		<form class="appnitro"  method="post" action="<?php $SELF_PHP;?>?acao=setPelo">
	<div class="form_description">
		<h2>Cadastro de pelo</h2>
	</div>	
		<div>					
		<ul class="list-unstyled">	
			<li id="li_4" >
				<label class="description" for="element_4">Tipo: </label>
				<div>
				<input id="tipo" name="tipo" input class="form-control" placeholder="Tipo" type="text" maxlength="255" value=""/> 
				</div> 
			</li>		
			<li id="li_3" >
				<label class="description" for="element_3">Valor: </label>
				<div>
				<input id="valor" name="valor" input class="form-control" placeholder="Valor" type="text" maxlength="255" value=""/> 
				</div> 
			</li>	
				<li class="buttons">
				<input type="hidden" name="form_id" value="1128562" />	    
				<input id="saveForm" class="btn btn-primary" type="submit" name="submit" value="Cadastrar" />
			</li>
		</ul> 
		</div>
		</form>	
		<div id="footer">		
		</div>
	</div>
	<div class="clear"> </div>
	</body>
</html>
<?php
    include_once "pelo.class.php";
	include_once "mysql.class.php";
	if (isset($_GET['acao'])){
	$acao = $_GET['acao'];
	$pelo = new Pelo();
	$pelo -> setTipo($_POST["tipo"]);
	$pelo -> setValor($_POST["valor"]);
    $pelo ->insertPelo($pelo); 
}

?>   