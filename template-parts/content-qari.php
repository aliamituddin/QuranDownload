<article id="post-<?php the_ID(); ?>" class="mt-3">
        <?php
            qurandl_post_thumbnail();
            the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
            echo "<input id='myInput' onkeyup='myFunction()' placeholder='نام سوره ی مورد نظر را جست و جو کنید...'>";
            the_content();
        ?>
    </article><!-- #post-<?php the_ID(); ?> -->