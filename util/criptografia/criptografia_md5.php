<?php

//md5 128 bits - 32 caracters

$senha = 'edilson';

$criptografada = md5($senha);


echo "senha digitada ".$senha;
echo "<br>senha criptografada ".$criptografada;

//login
$digitousenha = "edilson";
if (md5($digitousenha) == $criptografada)
echo "<p> Senha correta !";
else
echo "<p>Senha incorreta !";


?>