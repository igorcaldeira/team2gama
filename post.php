<?php
	if(!$_GET['id']){
		header("location:http://enemto.top");
	}
  
    include "mysql_conn.php";

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
		
    
    <?php include "modal_promocao.php" ?>
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