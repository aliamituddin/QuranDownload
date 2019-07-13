<article id="post-<?php the_ID(); ?>" class="mt-3">
        <?php
            qurandl_post_thumbnail();
            the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
        ?>
    <div class="row">
        <div class="form-group">
            <input class="form-control" id="myFunction()" placeholder="نام سوره ی مورد نظر را جست و جو کنید...">
        </div>
    </div>
        <?php
            the_content();
        ?>
    </article><!-- #post-<?php the_ID(); ?> -->