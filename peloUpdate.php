<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="view.css" media="all">
</head>
<body id="main_body" >
	<?php
	include_once "menu/panels.inc";
	?>	
	<div id="form_container">
		<h1><a>Alterar pelo:</a></h1>
		<form class="appnitro"  method="post" action="<?php $SELF_PHP;?>?acao=getPelo">
			<div class="form_description">
				<h2>Alterar pelo</h2>
				</div>						
				<ul >
					<li class='buttons'>
	         			<input type='hidden' name='form_id' value='1130674' />
	         			<input id='saveForm' class='btn btn-default' type='submit' name='submit' value='Buscar' />
	         			<?php 
	         			include_once "pelo.class.php";
						include_once "mysql.class.php";
	         			$pelo = new Pelo;
	        			$pelo->getSelect();?>
    				</li>
				</ul> 
		</form>
		<form class="appnitro"  method="post" action="<?php $SELF_PHP;?>?acao=updatePelo">
			<li class="buttons">
			    <input type="hidden" name="form_id" value="1130674" />
				<input id="saveForm" class="btn btn-default" type="submit" name="submit" value="Alterar" />
			</li>
		</form>	
	</div>
</body>
</html>
<?php


?>
<?php
    include_once "pelo.class.php";
	include_once "mysql.class.php";
if (isset($_GET['acao'])){
$acao = $_GET['acao'];
    switch($acao) {
        case "updatePelo":{
            	$pelo = new Pelo;
   				$pelo -> setCodigoPelo($_POST["codigo"]);
				$pelo -> setTipo($_POST["tipo"]);
				$pelo -> setValor($_POST["valor"]);	
  				$pelo ->updatePelo($pelo);
            }
            break;
        case "getPelo": {		    
			    $codigo =$_POST["codigo"];
				$pelo = new Pelo();
			    $pelo ->selectPelo($codigo); 
        }
        break;
    }

}
?>   