<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Enem Tô Top</title>
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
        <center><a href="index.php"><img id="landing-page-logo" src="images/logoTrofeu.png"></a></center>
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