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
		<form id="form_1130674" class="appnitro"  method="post" action="<?php $SELF_PHP;?>?acao=deleteFunc" method="post">
			<div class="form_description">
				<h2>Excluir funcionário</h2>
			</div>						
			<div class="form-group">
				<?php
				include_once "funcionario.class.php";
				include_once "mysql.class.php";
				$funcionario = new Funcionario();
			 	$funcionario -> getSelect($funcionario);
			    ?> 
				<div class="form-group">
			    	<input type="hidden" name="form_id" value="1130674" />
					<input id="saveForm" class="btn btn-danger btn-lg" type="submit" name="submit" value="Excluir" />
				</div>
			</div>
		</form>	
	</div>
</body>
</html>
<?php
if (isset($_GET['acao'])){
$acao = $_GET['acao'];
switch($acao) {
    case "deleteFunc":{
    include_once "funcionario.class.php";
	include_once "mysql.class.php";
	$funcionario = new Funcionario();
    $funcionario->deleteFunc($funcionario);
	}
	break;
	}
}

?>