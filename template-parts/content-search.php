<article id="post-<?php the_ID(); ?>" class="col-md-3 col-sm-6 mt-3 mb-3">
    <?php
    qurandl_post_thumbnail();
    the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
    ?>
</article>