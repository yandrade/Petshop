<?php
include_once 'mysql.class.php';


class Funcionario{
   public $codigoFuncionario;
   public $funcionarioNome;
   public $funcionarioFuncao;
   public $funcionarioEmail;
   
	
	public function setCodigoFuncionario($codigoFuncionario){
		$this->codigoFuncionario=$codigoFuncionario;
	}
	public function setFuncionarioNome($funcionarioNome){
		$this->funcionarioNome=$funcionarioNome;
	}
		
	public function setFuncionarioFuncao($funcionarioFuncao){
	
		$this->funcionarioFuncao=$funcionarioFuncao;
	}
		
	public function setFuncionarioEmail($funcionarioEmail){
		$this->funcionarioEmail=$funcionarioEmail;
	}
	public function getCodigoFuncionario(){
		return $this->codigoFuncionario;
	}
	public function getFuncionarioNome(){
		return $this->funcionarioNome;
	}
		
	public function getFuncionarioFuncao(){
		return $this->funcionarioFuncao;
	}
		
	public function getFuncionarioEmail(){
		return $this->funcionarioEmail;
	}
  function insertFunc($funcionario){
		$connect = new Mysql();   
        $query="insert into funcionario(funcionarioNome,funcionarioFuncao,funcionarioEmail) values('".$funcionario->getFuncionarioNome()."','".$funcionario->getFuncionarioFuncao()."','".$funcionario->getFuncionarioEmail()."')";

        mysqli_query($connect -> connect(),$query);
		echo $query;

        if($query){
            $resposta="Inserido com sucesso";
                    echo $resposta;
        }else{
            $resposta ="Erro ao inserir";
                    echo $resposta;
		
        }
        
        return $resposta;
        echo $resposta;
    }
	
	  function deleteFunc($funcionario){
	 	$connect = new Mysql();   
        $query="delete from funcionario where funcionariocodigo='".$funcionario->getCodigofuncionario()."'";
        mysqli_query($connect -> connect(),$query);

        if($query){
            $resposta="Excluido com sucesso";
          
        }else{
            $resposta ="Erro ao excluir";
        }
        
        return $resposta;
    }
	
		  function updateFunc($funcionario){
	 	$connect = new Mysql();
	 	$funcionarioNome=$funcionario->getFuncionarioNome();
		$funcionarioFuncao=$funcionario->getFuncionarioFuncao();
		$funcionarioEmail=$funcionario->getFuncionarioEmail();
        $query="update funcionario set FuncionarioNome='"
        .$funcionarioNome."', 
        FuncionarioFuncao='"
        .$funcionarioFuncao."',
        FuncionarioEmail='"
        .$funcionarioEmail."'"." 
        where Funcionariocodigo='"
        .$funcionario->getCodigoFuncionario()
        ."'";
		
        mysqli_query($connect -> connect(),$query);

        if($query){
            $resposta="Alterado com sucesso";
            echo $query;
        }else{
            $resposta ="Erro ao alterar";
        }
        
        return $resposta;
    }
    function selectFunc($codigoFuncionario){
	 	$connect = new Mysql();  
        if ($codigoFuncionario!="")
           $query="select * from funcionario  where Funcionariocodigo='".$codigoFuncionario."'";
		else
		   $query="select * from funcionario ";
		   
    	$funcionario = new Funcionario();
		
        $resultado=mysqli_query($connect -> connect(),$query);
        
		printf("<center><table class='table table-striped table table-bordered' ><tr><th>Código</th><th>Nome</th><th>Função</th><th>Email</th>");
        while($linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
	        $funcionario->setCodigoFuncionario($linha['funcionarioCodigo']);
		    $funcionario->setFuncionarioNome($linha['funcionarioNome']);
		    $funcionario->setFuncionarioFuncao($linha['funcionarioFuncao']);
            $funcionario->setFuncionarioEmail($linha['funcionarioEmail']);

		
	    printf("<tr><td>{$funcionario->getCodigoFuncionario()}</td>");
		printf("<td>{$funcionario->getFuncionarioNome()}</td>");
		printf("<td>{$funcionario->getFuncionarioFuncao()}</td>");
		printf("<td>{$funcionario->getFuncionarioEmail()}</td>");

  }
  printf("</table></center>");
    }
        function getSelect()
                    {
    $connect = new Mysql();
    $getSelect = "select * from funcionario";
    $getSelectRes = mysqli_query($connect -> connect(),$getSelect);
    print "<label for='funcionarioCodigo'>Funcionario:<br>";
    print "<select name='funcionarioNome'>";
   while($l = mysqli_fetch_array($getSelectRes,MYSQLI_ASSOC))
    {
        $this->codigoFuncionario=$l["funcionarioCodigo"];
        $this->funcionarioNome=$l["funcionarioNome"];
        print "<option value='{$this->codigoFuncionario}'>{$this->codigoFuncionario} - {$this->funcionarioNome}</option>";
    }
    print "</select>";
    print "</label>";
    }

	}

	


	
?>