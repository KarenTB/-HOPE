<?php 

global $pdo;//variavel gglobal
//tratamento erros
try {
	$pdo =  new PDO("mysql:dbname=cadastro;host=localhost", "root", "");
} catch (PDOException $e) {
	echo "Falhou".$e->getMessage();
	die();

}



 ?>