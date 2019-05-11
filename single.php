	<div id="primary" class="content-area">
        <main id="main">
            <section class="qari">
                <?php
                    get_header();
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content-qari');
                    endwhile;
                    get_footer();
                ?>
            </section>
		</main><!-- #main -->
    </div><!-- #primary -->

