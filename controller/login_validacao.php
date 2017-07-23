<?php

session_start();


if(($_POST['usu_login'] != '') && ($_POST['usu_senha'] != ''))

{
//echo "OK, vc digitou usuário e senha!";

require ('../util/conecta.php');
require ('../util/funcoes.php');

$sql = "select * from tbl_usuario where USU_LOGIN = '".$_POST['usu_login']."' and USU_SENHA = '".base64_encode($_POST['usu_senha'])."'";

$resultado = $con->banco->Execute($sql);

if ($registro = $resultado->FetchNextObject())
{
	//alerta("usuário válido");	
	
session_register('sessao_cod_usuario');
$_SESSION['sessao_cod_usuario'] = $registro->USU_CODIGO;

session_register('sessao_nome_usuario');
$_SESSION['sessao_nome_usuario'] = $registro->USU_NOME;

session_register('sessao_nivel_usuario');
$_SESSION['sessao_nivel_usuario'] = $registro->USU_NIVEL;	

	
	direciona('index.php');


}
else
{
	alerta ("Usuário não válido");
	voltar();
	exit;
}
}

else
{
echo "VC precisa digitar usuário e senha";
}

?>