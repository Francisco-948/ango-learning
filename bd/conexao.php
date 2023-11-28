<?php

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$bd = "centro-atc";

	try{
		$conexao = new PDO("mysql:host=$servidor;dbname=$bd", $usuario, $senha);
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $erro){
		echo "Ocorreu um erro de conexão: {$erro->getMessage()}";
		$conexao = null;
	}

	

	//if ($conexao->connect_errno){
	//	echo "Falha na conexão:(".$conexao->connect_errno.") ".$conexao->connect_error;
//
	//} else {
	//	echo "Conectado ao Banco de Dados";
//
	//}
	//$conexao = null;
	
 ?>