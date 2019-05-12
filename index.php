	<div id="primary" class="content-area">
		<main id="main">
<?php get_header();?>
            <section class="jumbotron text-center mt-5">
                <div class="container">
                    <h3 class="text-danger jumbotron-heading mb-3">دانلود قران</h3>
                    <p class="lead text-muted">برای دانلود یا شنیدن آنلاین قران روی نام قاری مورد نظر کلیک کنید.</p>
                </div>
            </section>
            <div class="row">
		<?php
		if ( have_posts() ) :
            while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content',get_page_template());
			endwhile;
		endif;
		?>
            </div>
            <?php get_footer(); ?>
		</main><!-- #main -->
    </div><!-- #primary -->

