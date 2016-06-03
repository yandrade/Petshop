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
	
		<h1><a>Pesquisar tabelo pelo:</a></h1>
		<form id="form_1128562" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Pesquisar tabelo pelo:</h2>
			<p>
</p>
		</div>						
			<ul >
			
					<li id="li_2" >
		<label class="description" for="element_2">Codigo: </label>
		<div>
			<input id="codigo"  <input class="form-control" placeholder="Codigo" type="text" name="codigo" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			<li class='buttons'>
                <input type='hidden' name='form_id' value='1130674' />
                <input id='saveForm' class='btn btn-default' type='submit' name='submit' value='Buscar' />
       		</li>

			</ul> 
			<?php

			    include_once "pelo.class.php";
				include_once "mysql.class.php";
			    
			    $codigo =$_POST["codigo"];
				$pelo = new Pelo();
			    $pelo ->selectPelo($codigo); 

			?>   

		</form>	

		<div id="footer">
			
		</div>
	</div>

	</body>
</html>
