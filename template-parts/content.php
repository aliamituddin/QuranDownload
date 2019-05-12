<article id="post-<?php the_ID(); ?>" class="col-md-2 col-sm-6 mt-3 mb-3">
        <?php
            qurandl_post_thumbnail();
            the_title( '<h5 class="entry-title h5"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
        ?>
</article><!-- #post-<?php the_ID(); ?> -->