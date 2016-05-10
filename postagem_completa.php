<article class="blog-post">
      <div class="blog-post-image">
            <a href="<?php echo $url; ?>"><img src="images/noticia/<?php echo $noticia['img']; ?>"></a>
      </div>
      <div class="blog-post-body">
            <h1><?php echo utf8_encode($noticia['titulo']); ?></h1>
            <div class="post-meta">
                  <span><?php echo "por ".utf8_encode($noticia['autor']); ?></span>/<span><i class="fa fa-clock-o"></i><?php echo date("d/m/Y G:i ", strtotime("$noticia[data]")); ?></span>
            </div>
            <div class="blog-post-text">
      		<?php echo utf8_encode($noticia['noticia']); ?>
      	      <div class="fb-share-button" data-href="http://enemto.top/post.php?id=<?php echo $noticia['id_noticia'] ?>" data-layout="button_count" data-mobile-iframe="true">
                  </div>
      						
      	</div>
      </div>
      <?php
           $mysqli->close();
      ?>                
      <div id="disqus_thread"></div>
            <script>
            /**
            * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
            */
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            // DON'T EDIT BELOW THIS LINE
            (function() {var d = document, s = d.createElement('script');s.src = '//enemttop.disqus.com/embed.js';s.setAttribute('data-timestamp', +new Date());(d.head || d.body).appendChild(s);})();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
</article>