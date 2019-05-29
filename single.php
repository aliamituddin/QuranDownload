
<?php get_header(); ?>
<div id="primary" class="content-area">
        <main id="main">
            <section class="qari">
                <?php
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content-qari');
                    endwhile;
                ?>
            </section>
		</main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>

