	<div id="primary" class="content-area">
		<main id="main">
		<?php
        get_header();
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
/*			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
*/
		endwhile; // End of the loop.
		?>
        <?php get_footer(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->