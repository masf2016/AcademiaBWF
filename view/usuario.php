<?php
//session_start ();
$nome = $_SESSION ['sessao_nome_usuario'];
$nivel = $_SESSION ['sessao_nivel_usuario'];	
?>
<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet"
	href="http://localhost/AcademiaBWF/util/style/style_usuario.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Best Way Fitness</title>
</head>
<body>
<span id="saudacao"> Bom dia <?php echo $nome ?> !</span>
<?php 
				echo   "<div id='img'><h1><div id='best'><img src='http://localhost/AcademiaBWF/util/imagem/logo.jpg'></div></div>";
				echo   "<div id='espaço'></div>";

if ($nivel  == "ADM")
{
				echo   "<a href='/AcademiaBWF/view/usuario_adm/menu_adm.php'><div id='Adminstrador'><h1>Administrador</h1></div></a>";
				echo   "<a href='/AcademiaBWF/view/usuario_secretaria/menu_secretario.php'><div id='Secretario'><h1>Secretario(a)</h1></div></a>";
				echo   "<a href='/AcademiaBWF/view/usuario_aluno/menu_aluno.php'><div id='Aluno'><h1>Aluno</h1></div></a>";		
				echo   "<a href='/AcademiaBWF/view/usuario_prof/menu_professor.php'><div id='Professor'><h1>Professor</h1></div></a>";		
				echo   "<a href='/AcademiaBWF/view/usuario_avaliador/menu_avaliador_fisico.php'><div id='AvaliadorFisico'><h1>Avaliador Físico</h1></div></a>";
}elseif ($nivel  == "SECRETARIO")
{
				echo   "<a href='/AcademiaBWF/view/usuario_secretaria/menu_secretario.php'><div id='Secretario'><h1>Secretario(a)</h1></div></a>";
				echo   "<a href='/AcademiaBWF/view/usuario_aluno/menu_aluno.php'><div id='Aluno'><h1>Aluno</h1></div></a>";		
				echo   "<a href='/AcademiaBWF/view/usuario_prof/menu_professor.php'><div id='Professor'><h1>Professor</h1></div></a>";		
				echo   "<a href='/AcademiaBWF/view/usuario_avaliador/menu_avaliador_fisico.php'><div id='AvaliadorFisico'><h1>Avaliador Físico</h1></div></a>";
}elseif ($nivel  == "PROFESSOR")
{
				echo   "<a href='/AcademiaBWF/view/usuario_prof/menu_professor.php'><div id='Professor'><h1>Professor</h1></div></a>";
}elseif ($nivel  == "AVALIADOR")
{
				echo   "<a href='/AcademiaBWF/view/usuario_avaliador/menu_avaliador_fisico.php'><div id='AvaliadorFisico'><h1>Avaliador Físico</h1></div></a>";
}elseif ($nivel  == "ALUNO")
{
				echo   "<a href='/AcademiaBWF/view/usuario_aluno/menu_aluno.php'><div id='Aluno'><h1>Aluno</h1></div></a>";
}
	 
				?>
    </body>
</html>

