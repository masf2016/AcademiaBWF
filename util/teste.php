<?
//PATH ONDE SE ENCONTRA A CLASSE ADODB 
include("//opt//lampp//htdocs//AcademiaBWF//util//adodb5//adodb.inc.php");
//    require('adodb5/adodb.inc.php');
//EFETUA A CONEXÃO 
$conn = NewADOConnection("mysql"); 
$conn->connect("localhost","root","", "academiaBWF");


$sql = "SELECT  id_adm_acad, cod_adm_acad, nome_adm_acad, cpf_adm_acad, rg_adm_acad FROM  adm_acad";

$result = $conn->Execute($sql);


if (!$result){ 
	$msg = $conn->ErrorMsg();
}else{
while (!$result->EOF){
echo $result->fields[0]."<br>";
echo $result->fields[1]."<br>";
echo $result->fields[2]."<br>";
$result->MoveNext();
}
}