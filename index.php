<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="row">
		<?php
		if ( have_posts() ) :
            while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
