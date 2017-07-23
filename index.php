<?php
session_start ();

$nome = $_SESSION ['sessao_nome_usuario'];
$nivel = $_SESSION ['sessao_nivel_usuario'];

if (! $_SESSION ['sessao_cod_usuario']) {

	require ('util/funcoes.php');

	direciona ( 'view/login_form.php' );

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
				
				require ('./util/conecta.php');
			//	require ('./util/funcoes.php');

				
				echo "nome = $nome e nivel  = $nivel ";
				
				if($nivel == "ADM" || $nivel == "SECRETARIO" || $nivel == "ALUNO")
				{
					require ('view/usuario.php');
				}
				
				//$conn = new Conexao();
				?>
				
				</body>
</html>