<article id="post-<?php the_ID(); ?>" class="col-md-3">
        <?php qurandl_post_thumbnail(); ?>
        <?php
        the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
        ?>
    </article><!-- #post-<?php the_ID(); ?> -->