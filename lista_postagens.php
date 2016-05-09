<?php
    $mysqli = new mysqli("mysql.enemto.top", "enemto", "GamAT2BH2016", "enemto");
    if (mysqli_connect_errno()) {
      printf("Ops! Aconteceu um erro. :(");
      exit();
    }

    $resultado = $mysqli->query("SELECT * FROM noticia ORDER BY data DESC");
    while($noticia = mysqli_fetch_array($resultado, MYSQLI_BOTH)) {
      $url = "post.php?id=".$noticia['id_noticia']."&titulo=".utf8_encode($noticia['titulo']);
?>
      <article class="blog-post">
        <div class="blog-post-image">
          <a href="<?php echo $url; ?>"><img src="images/noticia/<?php echo $noticia['img']; ?>"></a>
        </div>
        <div class="blog-post-body">
          <h2><a href="<?php echo $url; ?>"></a><?php echo utf8_encode($noticia['titulo']); ?></h2>
          <div class="post-meta"><span><?php echo "por ".utf8_encode($noticia['autor']); ?></span>/<span><i class="fa fa-clock-o"></i><?php echo date("d/m/Y G:i ", strtotime("$noticia[data]")); ?></span></div>
          <p><?php echo utf8_encode($noticia['resumo']); ?></p>
          <div class="read-more"><a href="<?php echo $url; ?>">Continue Lendo</a></div>
        </div>
      </article>
<?php
    }
    $mysqli->close();
?>