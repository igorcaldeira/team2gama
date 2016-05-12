<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Language" content="pt-br">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Conteúdo que gera impacto sobre o ENEM, Exame Nacional do Ensino Médio. As melhores notícias sobre o enem, inscrições, provas, gabarito, Resultado, teste vocacional e ebook.">
		<meta name="author" content="ENEM TÔ TOP">
		<link rel="icon" href="favicon.ico">
		<meta name="robots" content="index,follow">
		<meta name="distribution" content="global">
		<meta name="rating" content="general">
		<meta name="URL" content="http://enemto.top">
		<meta name="copyright" content="ENEM TÔ TOP">
		<meta name="keywords" content="enem 2016, enem 2016 notícias, educação, exame, prova, enem, inscrições, estudo, entrevista, ebook, teste vocacional">

		<meta property="og:locale" content="pt_BR">
		<meta property="og:type" content="website">
		<meta property="og:title" content="Enem Tô Top | Conteúdo que gera impacto">
		<meta property="og:description" content="Conteúdo que gera impacto sobre o ENEM, Exame Nacional do Ensino Médio. As melhores notícias sobre o enem, inscrições, provas, gabarito, Resultado, teste vocacional e ebook.">
		<meta property="og:url" content="http://enemto.top">
		<meta property="og:site_name" content="ENEM TÔ TOP">
		<meta property="og:image" content="http://enemto.top/images/smallLogo.JPG" />



		<title>Enem Tô Top | Conteúdo que gera impacto</title>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="css/jquery.bxslider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
	</head>
	<body>
		<?php include "nav.html"; ?>
    <div id="landig-page" class="row">
        <br>
        <center><a href="index.php"><img id="landing-page-logo" src="images/logoTrofeu.png" alt="ENEM TÔ TOP"></a></center>
    </div>
    <div id="landig-page-form" class="row">
        Vida de vestibulando tá difícil? &nbsp;
              <button type="button" class="btn btn-default btn-lg" onclick="$('#modal_ajuda').modal('toggle');">A gente te ajuda!</button>
    </div>
    
	 <div class="container">       
    <header></header>

		<section id="conteudo">
			<div class="row">
		        <div class="col-md-8">
		        	<center><h1 class="sidebar-title">Conteúdo que gera impacto</h1></center>
		        	<?php include "lista_postagens.php";?>
		            <br><br>
		        	<?php include "quero_receber_atualizacao.html";?>
		        </div>

		        <div class="col-md-4 sidebar-gutter">
		          <?php include "sidebar.php" ?>
		        </div>

	        
			</div>
		</section>
		</div>
    <!-- /.container -->

    <?php include "footer.html"; ?>
    <?php include "modal_promocao.php"; ?>
    <?php include "modal_ajuda.html"; ?>
    <?php include "js.html"; ?>
  </body>
</html>