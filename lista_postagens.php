<?php
    include "mysql_conn.php";

    $num = $_POST['pag']*5;
    $resultado = $mysqli->query("SELECT * FROM noticia ORDER BY data DESC");
    $registros = $resultado->num_rows;
    $maxpag = ceil($registros / 5);

    $resultado = $mysqli->query("SELECT * FROM noticia ORDER BY data DESC LIMIT ".$num.", 5");
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

    $proxima = '';
    $anterior = '';
    if ($maxpag > 1 and $maxpag-1 > $_POST['pag']) {
      $num = $_POST['pag'] + 1;
      $proxima = '<form  name="proxpag" method="post" action="index.php">
                      <input type="hidden" name="pag" id="pag" value="'.$num.'">
                       <button type="submit" class="btn btn-default btn-block" style="width: 70%">Próxima Página</button>
                  </form>';
    }
    if($_POST['pag'] != 0){
      $num = $_POST['pag'] - 1;
      $anterior ='<form  name="proxpag" method="post" action="index.php">
                      <input type="hidden" name="pag" id="pag" value="'.$num.'">
                       <button type="submit" class="btn btn-default btn-block" style="width: 70%">Página Anterio</button>
                  </form>';
    }

    echo '<div class="col-md-6">
        '.$anterior.'
      </div>
      <div class="col-md-6">
        '.$proxima.'
      </div>';
?>
