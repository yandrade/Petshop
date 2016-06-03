<?php 
include_once('Produto.class.php');

?>
<html>
<body>
    <h1>Incluir Dados</h1>
    <form action="<?php $SELF_PHP;?>?acao=setProduto" method="post" >
    <label for="Nome">
    Nome:
    <br />
    <input type="text" name="Nome"/></label>
    <br />
    <label for="Valor">Valor:
    <br />
    <input type="text" name="Valor" /></label>
    <br />
    <label for="Quantidade">Quantidade:
    <br />
    <input type="text" name="Quantidade" /></label>
    <br />
    
    <?php $getSelect = new Produto;
        $getSelect->getSelect(); ?>
    <br />
    <br />
    <input type="submit" value="Inserir" />
    </form>
	
	<hr>
	
	   <h1>Alterar Dados</h1>
    <form action="<?php $SELF_PHP;?>?acao=updateProduto" method="post" >
    <label for="codigo">
    Código:
    <br />
    <input type="text" name="codigo"/></label>
	<br>
	<label for="Nome">
    Nome:
    <br />
    <input type="text" name="Nome"/></label>
    <br />
    <label for="Valor">Valor:
    <br />
    <input type="text" name="Valor" /></label>
    <br />
    <label for="Quantidade">Quantidade:
    <br />
    <input type="text" name="Quantidade" /></label>
    <br />
    
    <?php $getSelect = new Produto;
        $getSelect->getSelect(); ?>
    <br />
    <br />
    <input type="submit" value="Alterar" />
    </form>
	
	<hr>
	
	<h1>Deletar Dados</h1>
    <form action="<?php $SELF_PHP;?>?acao=deleteProduto" method="post" >
    <label for="codigo">
    Código:
    <br />
    <input type="text" name="codigo"/></label>
	<br>
	<input type="submit" value="Deletar" />
    </form>
    
	<hr>
	
	<h1>Resgatar Dados</h1>
    <form method="post" action="<?php $SELF_PHP;?>?acao=getProduto" >
        <?php $getSelect->getSelect(); ?>
        <input type="submit" value="Listar Produtos" />
    </form>
</body>
</html>
<?php


// pega a variavel GET que passamos no action do form
if (isset($_GET['acao'])){
$acao = $_GET['acao'];

// Verifica qual formulario foi submetido
    switch($acao) {
        //se for setProduto
        case "setProduto":{
            //Criando e Instanciando o objeto
            $produto1 = new Produto;
            //Atribuindo valores ao objeto
            $produto1->nome = $_POST['Nome'];
            $produto1->valor = $_POST['Valor'];
            $produto1->quantidade = $_POST['Quantidade'];
            $produto1->categoria = $_POST['Categoria'];
            //chamando a funcao que faz o insert
            $produto1->setProduto();
            }
            break;
		//se for updateProduto
        case "updateProduto":{
            //Criando e Instanciando o objeto
            $produto1 = new Produto;
            //Atribuindo valores ao objeto
			$produto1->codigo = $_POST['codigo'];
            $produto1->nome = $_POST['Nome'];
            $produto1->valor = $_POST['Valor'];
            $produto1->quantidade = $_POST['Quantidade'];
            $produto1->categoria = $_POST['Categoria'];
            //chamando a funcao que faz o insert
            $produto1->updateProduto();
            }
            break;
			//se for updateProduto
        case "deleteProduto":{
            //Criando e Instanciando o objeto
            $produto1 = new Produto;
            //Atribuindo valores ao objeto
			$produto1->codigo = $_POST['codigo'];
            //chamando a funcao que faz o insert
            $produto1->deleteProduto();
            }
            break;
        //se for setProduto
        case "getProduto": {
            $getProduto = new Produto;
            $getProduto->cat_id = $_POST['Categoria'];
            $getProduto->getProduto();
        }
        break;
    }

}
?>