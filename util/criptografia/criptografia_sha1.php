<?php

//sha1 160 bits - 40 caracters - one way

$senha = 'edilson';

$criptografada = sha1($senha);


echo "senha digitada ".$senha;
echo "<br>senha criptografada ".$criptografada;

//login
$digitousenha = "edilfdfsdffdson";
if (sha1($digitousenha) == $criptografada)
echo "<p> Senha correta !";
else
echo "<p>Senha incorreta !";


?>