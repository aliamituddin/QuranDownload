<article id="post-<?php the_ID(); ?>" class="m-2 p-5">
        <?php
            qurandl_post_thumbnail();
            the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
            the_content();
        ?>
    </article><!-- #post-<?php the_ID(); ?> -->