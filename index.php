<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="row">
		<?php
		if ( have_posts() ) {

			/* Start the Loop */
			while ( have_posts() ) {
                the_post();
                get_template_part('template-parts/content', get_post_type());
            }
			the_posts_navigation();
		}else {

            get_template_part('template-parts/content', 'none');

        }
		?>
            </div>
            <?php get_footer(); ?>
		</main><!-- #main -->
    </div><!-- #primary -->

