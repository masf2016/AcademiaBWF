<?php

require ('../util/conecta.php');
//require ('../util/funcoes.php');

session_start ();

if (($_POST ['usu_login'] != '') && ($_POST ['usu_senha'] != '')) 

{
	// echo "OK, vc digitou usuário e senha!";
	
	$con = new conexao();
	
	$sql = "select * from usuario_acad where login_usu_acad	 = '" . $_POST ['usu_login'] . "' and senha_usu_acad = '" . base64_encode ( $_POST ['usu_senha'] ) . "'";
	
	$resultado = $con->banco->Execute ($sql);
	

	
	if ($registro = $resultado->FetchNextObject ()) {
		// alerta("usuário válido");
		

		$_SESSION ['sessao_cod_usuario'] = $registro->ID_USU_ACAD;
		

		$_SESSION ['sessao_nome_usuario'] = $registro->LOGIN_USU_ACAD;
		

		$_SESSION ['sessao_nivel_usuario'] = $registro->NIVEL_USU_ACAD;
		
		direciona ( '../index.php' );
	} else {
		alerta ( "Usuário inválido!" );
		voltar ();
		exit ();
	}
} 

else {
	echo "VC precisa digitar usuário e senha";
}

?>