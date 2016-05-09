<?php
	if($_POST['email'] and $_POST['escolaridade']){
		$mysqli = new mysqli('localhost', 'usuario', 'senha', 'banco');
		
		if (mysqli_connect_errno()) {
			printf("Ops! Aconteceu um erro. :(");
		    exit();
		}

		$email = addslashes($_POST['email']);
		$escolaridade = addslashes($_POST['escolaridade']);
		$tipo = addslashes($_POST['tipo']);
		$nome = utf8_decode(addslashes($_POST['nome']));
		if (!$mysqli->query("INSERT INTO email (nome, email, escolaridade, tipo) values ('$nome', '$email', '$escolaridade', $tipo)")) {
			printf("Ops! Aconteceu um erro. :(");
		}

		$mysqli->close();
		if($tipo == 1){
			header("location:http://enemto.top/dicas.html");
		}else if($tipo == 2){
			header("location:http://enemto.top/ebook/ebook-recursos-gratuitos-enem.pdf");
		}else{
			header("location:http://enemto.top/parabens.html");			
		}
		exit();
	}
	header("location:http://enemto.top");
?>