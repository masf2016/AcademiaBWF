<?php
if (! $_SESSION ['sessao_cod_usuario']) {
	require ('util/funcoes.php');

	direciona ('view/login.php');
	exit ();
} else {
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Academia Best Way Fitness</title>
</head>

<body>


<?php
}

?>


    <?php
    
				require ('../util/conecta.php');
				require ('../util/funcoes.php');
				
				$tabela = $_REQUEST ['tabela'];
				
				$acao = $_REQUEST ['acao'];
				
				echo "tabela = $tabela e acao = $acao ";
				
				if ($tabela == "cidade")
					
					// require('cidade_lista.php');
					require ('cidade_acao.php');
				
				else if ($tabela == "categoria")
					require ('categoria_acao.php');
				
				else if ($tabela == "usuario")
					require ('usuario_acao.php');
				
				else if ($tabela == "fornecedor")
					require ('fornecedor_acao.php');
				
				else
					require ('principal.php');
				
				?>
				</body>
</html>