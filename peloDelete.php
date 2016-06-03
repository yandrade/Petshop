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
	<div id="form_container">
	
		<h1><a>Excluir pelo:</a></h1>
		<form id="form_1128562" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Excluir pelo:</h2>
			<p>
</p>
		</div>						
			<ul >
	<?php
    include_once "pelo.class.php";
	include_once "mysql.class.php";
	$pelo = new Pelo();
    $pelo -> getSelect($pelo);
    $pelo->deletePelo($pelo);
    ?>   
	<li class="buttons">
			    <input type="hidden" name="form_id" value="1128562" />			    
				<input id="saveForm" class="btn btn-danger"	 type="submit" name="submit" value="Excluir" />
	</li>

			</ul> 
		</form>	
		<div id="footer">
			
		</div>
	</div>
	</body>
</html>	