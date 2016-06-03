<?php
class Mysql
{
   // Atributos de instância
   public $hostname;
   public $username;
   public $password;
   public $banco;
        
	
   // Declaração do método construtor
   function __construct()
   {
      // Atribuímos os valores passados por parâmetro aos atributos
      $this->hostname = '127.0.0.1';
      $this->username ='root';
      $this->password ='';
      $this->banco = 'petshop';
            
      // Chama o método connect
      $this->connect();            
   }
        
   // Declaração do método connect
  function connect(){
		$conexao = mysqli_connect($this->hostname,$this->username,$this->password);
        if ($conexao){
			
			mysqli_select_db($conexao,$this->banco);				
		}
        		
		return $conexao;
	}
   

}