<?php
    include "mysql_conn.php";
    
    $num = $_GET['pag']*5;
    $query = "SELECT * FROM noticia WHERE data < CURRENT_TIMESTAMP() ORDER BY data DESC";
    $resultado = $mysqli->query($query);
    $registros = $resultado->num_rows;
    $maxpag = ceil($registros / 5);

    $resultado = $mysqli->query("SELECT * FROM noticia WHERE data < CURRENT_TIMESTAMP() ORDER BY data DESC LIMIT ".$num.", 5");
    while($noticia = mysqli_fetch_array($resultado, MYSQLI_BOTH)) {
      $url = "post.php?id=".$noticia['id_noticia']."&titulo=".utf8_encode($noticia['titulo']);
?>
      <article class="blog-post">
        <div class="blog-post-image">
          <a href="<?php echo $url; ?>"><img src="images/noticia/<?php echo $noticia['img']; ?>" alt="<?php echo utf8_encode($noticia['titulo']); ?>"></a>
        </div>
        <div class="blog-post-body">
          <h1><a href="<?php echo $url; ?>"></a><?php echo utf8_encode($noticia['titulo']); ?></h1>
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
    if ($maxpag > 1 and $maxpag-1 > $_GET['pag']) {
      $num = $_GET['pag'] + 1;
      $proxima = '<form  name="proxpag" method="get" action="index.php">
                      <input type="hidden" name="pag" id="pag" value="'.$num.'">
                       <button type="submit" class="btn btn-success btn-block" style="width: 70%"><b>Próxima Página </b><span class="fa fa-arrow-right fa-lg"></span></button>
                  </form>'; 
    }
    if($_GET['pag'] != 0){
      $num = $_GET['pag'] - 1;
      $anterior ='<form  name="proxpag" method="get" action="index.php">
                      <input type="hidden" name="pag" id="pag" value="'.$num.'">            
                       <button type="submit" class="btn btn-success btn-block" style="width: 70%"><span class="fa fa-arrow-left fa-lg"></span><b> Página Anterior</b></button>
                  </form>';
    }

    echo '<div class="col-md-6">
        '.$anterior.'
      </div>
      <div class="col-md-6">
        '.$proxima.'
      </div>
      <br><br>';
?>
