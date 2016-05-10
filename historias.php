<?php 
    include "mysql_conn.php";

    $resultado = $mysqli->query("SELECT * FROM historia ORDER BY data DESC");
?>
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
		<title>Conte sua história no ENEM | Enem Tô Top!</title>

		<meta property="og:url"           content="http://enemto.top/historias.php"/>
		<meta property="og:type"          content="website" />
		<meta property="og:title"         content="Conte sua história no ENEM - Enem Tô Top!" />
		<meta property="og:description"   content="" />
		<meta property="og:image"         content="http://enemto.top/>" />

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="css/jquery.bxslider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<?php include "nav.html";?>
	    <center><a href="index.php"><img id="landing-post-logo" src="images/logoTrofeu.png" width="400px"></a></center>
		<div class="container">
		<header>
		</header>
		<section>
			<div class="row">
				<div class="col-md-8">
						<div class="well">
						    <center>
						        <h1 class="modal-title">Conte algo que aconteceu com você no ENEM.&nbsp; <span class="fa fa-hand-peace-o fa-lg"></span></h1>
						        <h4 class="modal-title">Ao compartilhar sua história você irá automáticamente concorrer a <b>1 MÊS</b> de aulas <b>GRATÍS</b>.</h4>
						        <form style="margin-top: 25px" name="cadastro" value="cadastro" method="post" action="cadastroemail.php">
						            <input type="hidden" name="tipo" id="tipo" value="3">
						            <div class="form-group">
						              <label>Nome</label>
						                <input name="nome" style="width: 60%" type="nome" class="form-control" id="nome" placeholder="nome">
						            </div>
						            <div class="form-group">
						                <label>Email</label>
						                <input name="email" style="width: 60%" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required pattern="[^ @]*@[^ @]*">
						            </div>
						            <label>Escolaridade</label>
						            <div class="radio">
						                <label class="radio">
						                    <input type="radio" name="escolaridade" id="primeiroSegundoAno" value="1">Estou no 1 ou no 2 ano do ensino médio</label>
						                <label class="radio">
						                    <input type="radio" name="escolaridade" id="terceiroAno" value="2">Estou no 3 ano do ensino médio</label>
						                <label class="radio">
						                    <input type="radio" name="escolaridade" id="formado" value="3">Sou vestibulando já formado</label>
						                <label class="radio">
						                    <input type="radio" name="escolaridade" id="outros" value="4">Outros</label>
						            </div>
						            <div class="form-group">
						                <label>História</label>
						                <br>
						                <textarea name="historia" id="historia" rows="6" cols="80" required>
						                </textarea>
						            </div>
					                <center>
					                    <button type="submit" class="btn btn-success btn-block" style="width: 70%"><b>Publicar</b></button>
					                </center>
						        </form>
						    </center>
						</div>
						<?php 
							while($historia = mysqli_fetch_array($resultado, MYSQLI_BOTH)) {
						?>
								<article class="blog-post">
							        <div class="blog-post-body">
							        	<div class="post-meta"><span><?php echo "por ".utf8_encode($historia['nome']); ?></span>/<span><i class="fa fa-clock-o"></i><?php echo date("d/m/Y G:i ", strtotime("$historia[data]")); ?></span></div>
							        	<p><?php echo utf8_encode($historia['historia']); ?></p>
							        </div>
							    </article>
						<?php
							}
						?>
				</div>
					<div class="col-md-4 sidebar-gutter">
						<?php include "sidebar.php"; ?>
					</div>
				</div>
			</section>
		</div><!-- /.container -->
		
    
    <?php include "modal_promocao.html" ?>
    <?php include "footer.html"; ?>
    <?php include "js.html"; ?>
    <div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	</body>
</html>