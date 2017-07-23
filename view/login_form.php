<!DOCTYPE html>
<?php require ('../util/conecta.php');

$conn = new Conexao();
?>
<html>

<head>
<link type="text/css" rel="stylesheet"
	href="http://localhost/AcademiaBWF/util/style/style_login.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Login de Usuário</title>
</head>
<body>

	<div id="best">
		<img src="http://localhost/AcademiaBWF/util/imagem/logo.jpg">
	</div>
	<div id="saldações">
		<h1>Sejam Bem Vindos a Fitness</h1>
	</div>
	<div id="ajustar_tela">
			<div id="footer"><div id="footer">
				<h3> <?php $conn->seConectado();	?></h3>
				</div>
				</div>

		<form id="login_form" name="login_form" method="post"
			action="../model/login_validacao.php">

			<label for="usuario">Usuário</label> <input type="text"
				name="usu_login" class="txt" /> <label for="senha">Senha:</label> <input
				type="password" name="usu_senha" class="txt" /> <input type="submit"
				name="botao" class="sb" value="Entrar" />

		</form>

	</div>

</body>
</html>



