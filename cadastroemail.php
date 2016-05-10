<?php
	if($_POST['email']){
		
    	include "mysql_conn.php";

		$email = addslashes($_POST['email']);
		$escolaridade = addslashes($_POST['escolaridade']);
		$tipo = addslashes($_POST['tipo']);
		$nome = utf8_decode(addslashes($_POST['nome']));
		if (!$mysqli->query("INSERT INTO email (nome, email, escolaridade, tipo) values ('$nome', '$email', '$escolaridade', $tipo)")) {
			printf("Ops! Aconteceu um erro. :(");
		}


		if($_POST['historia']){
			$historia = utf8_decode(addslashes($_POST['historia']));
			if (!$mysqli->query("INSERT INTO historia (nome, historia) values ('$nome', '$historia')")) {
				printf("Ops! Aconteceu um erro. :(");
			}
		}

		$mysqli->close();
		if($tipo == 1){
			header("location:http://enemto.top/dicas.php");
		}else if($tipo == 2){
			header("location:http://enemto.top/ebook/ebook-recursos-gratuitos-enem.pdf");
		}else if($tipo == 3){
			header("location:http://enemto.top/historias.php");
		}else{
			setcookie("CookiePromocao", "ok");
			header("location:http://enemto.top/parabens.php");
		}
		exit();
	}
	header("location:http://enemto.top");
?>