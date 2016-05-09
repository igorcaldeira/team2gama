<?php
	if(!$_GET['id']){
		header("location:http://enemto.top");
	}
    $mysqli = new mysqli("mysql.enemto.top", "enemto", "GamAT2BH2016", "enemto");

    /* check connection */
    if (mysqli_connect_errno()) {
        //printf("Connect failed: %s\n", mysqli_connect_error());
      printf("Ops! Aconteceu um erro. :(");
        exit();
    }

    $resultado = $mysqli->query("SELECT * FROM noticia WHERE id_noticia = ".$_GET['id']);
    $noticia = mysqli_fetch_array($resultado, MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="<?php echo utf8_encode($noticia['resumo']); ?>">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title><?php echo  utf8_encode($noticia['titulo']); ?> | Enem Tô Top!</title>

		<meta property="og:url"           content="http://enemto.top/post.php?id=<?php echo $noticia['id_noticia'] ?>" />
		<meta property="og:type"          content="website" />
		<meta property="og:title"         content="<?php echo utf8_encode($noticia['titulo']); ?> - Enem Tô Top!" />
		<meta property="og:description"   content="<?php echo utf8_encode($noticia['resumo']); ?>" />
		<meta property="og:image"         content="http://enemto.top/images/noticia/<?php echo "fb_".$noticia['img']; ?>" />

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="css/jquery.bxslider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<?php include "nav.html";?>
	    <center><a href="index.php"><img id="landing-post-logo" src="images/logoFolha.png"></a></center>
		<div class="container">
		<header>
		</header>
		<section>
			<div class="row">
				<div class="col-md-8">
					<?php include "postagem_completa.php";?>
				</div>
					<div class="col-md-4 sidebar-gutter">
						<?php include "sidebar.php"; ?>
					</div>
				</div>
			</section>
		</div><!-- /.container -->

		   <!-- Modal -->
          <div class="modal fade" id="formModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Conteúdo que gera impacto  &nbsp; <span class="fa fa-hand-peace-o fa-lg"></span></h4>
                </div>
                <div class="modal-body">
                    EBOOK - GUIA DOS MELHORES RECURSOS GRATUITOS PARA SE PREPARAR PRO ENEM 2016   

                  <form style="margin-top: 25px" name="cadastro" value="cadastro" method="post" action="cadastroemail.php">
                    <input type="hidden" name="tipo" id="tipo" value="2">
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
                        <br>
                        <center>
                        <button type="submit" class="btn btn-success btn-block" style="width: 70%">Baixar Ebook</button>
                            </center>
                    </div>
                </form>


                    <span style="font-size: 10px">Conheça nossos <a href="politicasPrivacidadeEnemToTop.pdf">Termos de Política de Privacidade</a></span>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
                </div>
              </div>

            </div>
          </div>

		
    

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