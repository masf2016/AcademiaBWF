﻿<?php

    require('adodb5/adodb.inc.php'); //biblioteca necessaria para trabalhar com adodb
	
	
	class conexao
	{
	      var $tipo_banco    = "mysql";
		  var $servidor      = "localhost";
		  var $usuario       = "root";
		  var $senha         = "1";
		  var $banco;       
	    
	      function conexao() //metodo construtor
		  {
                $this->banco = NewADOConnection($this->tipo_banco);
				$this->banco->dialect = 3;
				$this->banco->debug = true;
				$this->banco->Connect($this->servidor,$this->usuario,$this->senha,"academiaBWF");
				
		  }
	}

    $con = new conexao();	
	
	if($con){
	echo "conectou";
	}else{
	echo "nao conectou";
	}
	/**/
	
	?>