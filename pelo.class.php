<?php
include_once 'mysql.class.php';


class Pelo{
   public $codigoPelo;
   public $tipo;
   public $valor;
   
    public function setCodigoPelo($codigoPelo){
		$this->codigoPelo=$codigoPelo;
	}
	public function setTipo($tipo){
		$this->tipo=$tipo;
	}
	public function setValor($valor){
		$this->valor=$valor;
	}
	public function getCodigoPelo(){
		return $this->codigoPelo;
	}
	public function getTipo(){
		return $this->tipo;
	}
	public function getValor(){
		return $this->valor;
	}
  function insertPelo($pelo){
		$connect = new Mysql();   
        $query="insert into pelo(peloTipo,peloValor) values('".$pelo->getTipo()."','".$pelo->getValor()."')";
        mysqli_query($connect -> connect(),$query);
        if($query){
            $resposta="Inserido com sucesso";
        }else{
            $resposta ="Erro ao inserir";
        }
        return $resposta;
        echo $resposta;
    }
	
	  function deletePelo($pelo){
	 	$connect = new Mysql();   
        $query="delete from pelo where pelocodigo='".$pelo->getCodigoPelo()."'";
        mysqli_query($connect -> connect(),$query);

        if($query){
            $resposta="Excluido com sucesso";
        }else{
            $resposta ="Erro ao excluir";
        }
        
        return $resposta;
    }
	
		  function updatePelo($pelo){
	 	$connect = new Mysql();  
        $tipo=$pelo->getTipo();
        $valor=$pelo->getValor();
        $query="update pelo set pelotipo='".$tipo."', pelovalor='".$valor."'"." where pelocodigo='".$pelo->getCodigoPelo()."'";
		
        mysqli_query($connect -> connect(),$query);

        if($query){
            $resposta="Alterado com sucesso";
            echo $query;
        }else{
            $resposta ="Erro ao alterar";
                        echo $query;
        }
        
        return $resposta;
    }
    function selectPelo($codigoPelo){
        $connect = new Mysql();  
        if ($codigoPelo!="")
           $query="select * from pelo where peloCodigo='".$codigoPelo."'";
        else
           $query="select * from pelo";
           
        $pelo = new Pelo();
        
        $resultado=mysqli_query($connect -> connect(),$query);
        printf("<center><table class='table table-striped table table-bordered'><tr><th>Código</th><th>Tipo</th><th>Valor</th>");
        while($linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
            $pelo->setCodigoPelo($linha['peloCodigo']);
            $pelo->setTipo($linha['peloTipo']);
            $pelo->setValor($linha['peloValor']);

        
        printf("<tr><td>{$pelo->getCodigoPelo()}</td>");
        printf("<td>{$pelo->getTipo()}</td>");
        printf("<td>{$pelo->getValor()}</td>");

  }
  printf("</table></center>");
    }
    function selectPelo2($codigoPelo){
        $connect = new Mysql();  
        if ($codigoPelo!="")
           $query="select * from pelo where peloCodigo='".$codigoPelo."'";
        else
           $query="select * from pelo";
           
        $pelo = new Pelo();
        
        $resultado=mysqli_query($connect -> connect(),$query);
        while($linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
            $pelo->setCodigoPelo($linha['peloCodigo']);
            $pelo->setTipo($linha['peloTipo']);
            $pelo->setValor($linha['peloValor']);
        }
    }

    function getSelect()
                    {
    $connect = new Mysql();
    $getSelect = "select * from pelo";
    $getSelectRes = mysqli_query($connect -> connect(),$getSelect);
    
    print "<label for='peloCodigo'>Pelo:<br>";
    print "<select name='peloTipo'>";
   while($l = mysqli_fetch_array($getSelectRes,MYSQLI_ASSOC))
    {
        $this->codigoPelo=$l["peloCodigo"];
        $this->tipo=$l["peloTipo"];
        $this->valor=$l["peloValor"];
        print "<option value='{$this->codigoPelo}'>{$this->codigoPelo} - {$this->tipo}</option>";
    }

    print "</select>";
    print "</label>";
                    }
	
        function getSelectt()
                    {
    $connect = new Mysql();
    $getSelect = "select * from pelo";
    $getSelectRes = mysqli_query($connect -> connect(),$getSelect);
    
    print "<label for='peloCodigo'>Pelo:<br>";
    print "<select name='peloTipo'>";
   while($l = mysqli_fetch_array($getSelectRes,MYSQLI_ASSOC))
    {
        $this->codigoPelo=$l["peloCodigo"];
        $this->tipo=$l["peloTipo"];
        $this->valor=$l["peloValor"];
        print "<option value='{$this->codigoPelo}'>{$this->codigoPelo} - {$this->tipo}</option>";
    }
    printf("    
        <li id='li_2' >
            <label class='description' for='element_2'>Codigo: </label>
            <div>
                <input id'codigo' name='codigo' input class='form-control' placeholder='Codigo' type='text' maxlength='255'value='$pelo->getCodigoPelo()'/> 
            </div> 
        </li>
        <li id='li_4' >
                <label class='description' for='element_4'>Tipo: </label>
            <div>
                <input id='tipo' name='tipo' input class='form-control' placeholder='Tipo' type='text' maxlength='255' value='$pelo->getTipo()'/> 
            </div> 
        </li>      
        <li id='li_3' >
            <label class='description' for='element_3'>Valor: </label>
            <div>
                <input id='valor' name='valor' input class='form-control' placeholder='Valor' type='text' maxlength='255' value='$pelo->getValor()'/> 
            </div> 
        </li>
");

    print "</select>";
    print "</label>";
                    }
        }

    


	
?>