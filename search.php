<section id="primary" class="content-area">
		<main id="main">
            <?php get_header();?>
            <h3 align="center">نتیجه ی جست و جو</h3>
            <?php if ( have_posts() ) : ?>
            <div class="row">
            <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'search' );
			endwhile;
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
            </div>
            <?php get_footer();?>
		</main><!-- #main -->
    </section><!-- #primary -->

