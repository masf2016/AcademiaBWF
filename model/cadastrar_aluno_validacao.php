<?php

require ('../util/conecta.php');
//require ('../util/funcoes.php');

session_start ();

if (($_POST ['usu_login'] != '') && ($_POST ['usu_senha'] != '')) 

{
	// echo "OK, vc digitou usuário e senha!";
	
	$con = new conexao();
	$sql_ACAD = "select id_academia from academia where nome_academia = 'BestWayFitness-Centro'";
		$resultadoAcad = $con->banco->Execute($sql_ACAD);
	$sql_login = "insert into usuario_acad('login_usu_acad','senha_usu_acad','nivel_usu_acad') 
			values ('".$_POST['usuario_login']."', '".base64_encode($_POST['password_login'])."','ALUNO')";
	$resultado_login = $con->banco->Execute ($sql_login);
		$sql_id = "select id_usu_acad from usuario_acad where id_usu_acad = LAST_INSERT_ID()";
		$resultadoA = $con->banco->Execute ($sql_id);
	
	$sql_ender = "insert into endereco_acad ( 'rua_endereco_acad', 'numero_end_acad', 'complemento_end_acad', 'bairro_end_acad', 'cidade_end_acad') ;
			values ('".$_POST['rua_aluno']."','".$_POST['rua_aluno']."','".$_POST['Complemento_aluno']."','".$_POST['bairro_aluno']."','".$_POST['cidade_aluno']."')";
	$resultado_endereco = $con->banco->Execute ($sql_ender);
		$sql_id2= "select id_end_acad from endereco_acad where id_end_acad = LAST_INSERT_ID()";
		$resultadoB = $con->banco->Execute($sql_id2);
	
	$sql_tel = "insert into telefone ( numero_tel, tipo_tel) ;
				values ('".$_POST['tel_aluno']."','".$_POST['tipo_tel_aluno']."')";
	$resultado_telefone = $con->banco->Execute ($sql_tel);
		$sql_id3 = "select id_tel from telefone where id_tel = LAST_INSERT_ID()";
		$resultadoC = $con->banco->Execute ($sql_id3);
		
		
		$registro1 = $resultadoA->FetchNextObject ();
		$registroAcad = $resultadoAcad->FetchNextObject();
		
		
	$sql_aluno = "insert into aluno_acad ( cpf_aluno_acad, rg_aluno_acad, nome_aluno_acad, id_usu_acad, id_academia) values ('".$_POST['cpf_aluno']."','".$_POST['rg_aluno']."','".$_POST['nome_aluno']."','".$registro1->ID_USU_ACAD."','".$registroAcad->ID_ACADEMIA."'";
		$resultadoAluno = $con->banco->Execute ($sql_aluno);
	
	
	
	
	if ($registro = $resultado->FetchNextObject ()) {
	
 
		
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