<?php

    require('adodb5/adodb.inc.php'); //biblioteca necessaria para trabalhar com adodb
    include('funcoes.php');
	
	
	class Conexao
	{
	    public  $tipo_banco    = "mysql";
		public  $servidor      = "localhost";
		public  $usuario       = "root";
		public  $senha         = "";
		public  $banco; 
		public  $base_dados	   = "academiaBWF";
		
	      function conexao() //metodo construtor
		  {
                $this->banco = NewADOConnection($this->tipo_banco);
				$this->banco->dialect = 3;
				$this->banco->debug = true;
				$this->banco->Connect($this->servidor,$this->usuario,$this->senha,$this->base_dados);
				
				
		  }
		  
		  function seConectado()
		  {
		  	$con = new Conexao();
		  	
		  	if($con)
		  	{
		  		//echo "conectou";
		  		echo "<img src='http://localhost/AcademiaBWF/util/imagem/online70px.png'>";
		  		echo "Conectado ao BD '".$con->base_dados."' em '".$con->servidor."' ";
		  	
		  	}else{
		  		//echo "nao conectou";
		  		echo "<img src='http://localhost/AcademiaBWF/util/imagem/offline70px.png'>";
		  		echo 'Desconectado!';
		  	}
		  	
		  }
	}


	/**/
	
	?>