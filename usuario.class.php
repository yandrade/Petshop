<?php
include_once 'mysql.class.php';


class Usuario{
   public $usuarioCodigo;
   public $usuarioNome;
   public $usuarioLogin;
   public $usuarioSenha;
   
	
	public function setUsuarioCodigo($usuarioCodigo){
		$this->usuarioCodigo=$usuarioCodigo;
	}
	public function setUsuarioNome($usuarioNome){
		$this->usuarioNome=$usuarioNome;
	}
		
	public function setUsuarioLogin($usuarioLogin){
	
		$this->usuarioLogin=$usuarioLogin;
	}
		
	public function setUsuarioSenha($usuarioSenha){
		$this->usuarioSenha=$usuarioSenha;
	}
	public function getUsuarioCodigo(){
		return $this->usuarioCodigo;
	}
	public function getUsuarioNome(){
		return $this->usuarioNome;
	}
		
	public function getUsuarioLogin(){
		return $this->usuarioLogin;
	}
		
	public function getUsuarioSenha(){
		return $this->usuarioSenha;
	}
  function insertUsu($usuario){
		$connect = new Mysql();   
        $query="insert into usuario(usuariocodigo,usuarioNome,usuarioLogin,usuarioSenha) values('".$usuario->getUsuarioCodigo()."','".$usuario->getUsuarioNome()."','".$usuario->getUsuarioLogin()."','".$usuario->getUsuarioSenha()."')";

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
	
	  function deleteUsu($usuario){
	 	$connect = new Mysql();   
        $query="delete from usuario where usuariocodigo='".$usuario->getUsuarioCodigo()."'";
        mysqli_query($connect -> connect(),$query);

        if($query){
            $resposta="Excluido com sucesso";
            echo $query;
        }else{
            $resposta ="Erro ao excluir";
                        echo $query;
        }
        
        return $resposta;
    }
	
		  function updateUsu($fusuario){
	 	$connect = new Mysql();
	 	$usuarioNome=$usuario->getUsuarioNome();
		$usuarioLogin=$usuario->getUsuarioLogin();
		$usuarioSenha=$usuario->getUsuarioSenha();
        $query="update Usuario set usuarioNome='"
        .$usuarioNome."', 
        usuarioLogin='"
        .$usuarioLogin."',
        usuarioSenha='"
        .$usuarioSenha."'"." 
        where Funcionariocodigo='"
        .$usuario->getUsuarioCodigo()
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
    function selectUsu($usuariocodigo){
	 	$connect = new Mysql();  
        if ($usuariocodigo!="")
           $query="select * from usuario where usuariocodigo='".$usuariocodigo."'";
		else
		   $query="select * from usuario ";
		   
    	$usuario = new Usuario();
		
        $resultado=mysqli_query($connect -> connect(),$query);
        
		printf("<center><table class='table table-striped table table-bordered'><tr><th>Código</th><th>Nome</th><th>Função</th><th>Email</th>");
        while($linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
	        $funcionario->setCodigoFuncionario($linha['Funcionariocodigo']);
		    $funcionario->setFuncionarioNome($linha['FuncionarioNome']);
		    $funcionario->setFuncionarioFuncao($linha['FuncionarioFuncao']);
            $funcionario->setFuncionarioEmail($linha['FuncionarioEmail']);

		
	    printf("<tr><td>{$funcionario->getCodigoFuncionario()}</td>");
		printf("<td>{$funcionario->getFuncionarioNome()}</td>");
		printf("<td>{$funcionario->getFuncionarioFuncao()}</td>");
		printf("<td>{$funcionario->getFuncionarioEmail()}</td>");

  }
  printf("</table></center>");
    }
	}


	
?>