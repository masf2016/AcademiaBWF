<?php

//base 64 - 

$senha = 'edilson';

$criptografada = base64_encode($senha);


echo "senha digitada ".$senha;
echo "<br>senha criptografada ".$criptografada;

//login
$digitousenha = "edilson";
if (base64_encode($digitousenha) == $criptografada)
echo "<p> Senha correta !";
else
echo "<p>Senha incorreta !";


$senha_original_descriptografada = base64_decode($criptografada);

echo "<p> A senha original é ".$senha_original_descriptografada;

?>