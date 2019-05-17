	<div id="primary" class="content-area">
		<main id="main">
<?php get_header();?>
            <h2 class="text-primary m-3 mt-5 text-center">دانلود قران با صوت قاریان برتر</h2>
            <br>
            <div class="row col-md-10 mx-auto">
		<?php
		if ( have_posts() ) :
            while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content',get_page_template());
			endwhile;
		endif;
		?>
            </div>
            <section class="jumbotron text-center mt-5 mx-auto col-md-10 bg-default">
                <div class="container">
                    <p class="lead text-muted">قران دانلود یک پروژه ی متن باز اسلامی است که در جهت انتشار هرچه بیشتر قران تلاش می کند.</p>
                    <p class="lead">برای کسب اطلاعات بیشتر در رابطه با این پروژه به صفحه ی درباره ی ما مراجعه کنید.</p>
                    <a class="btn btn-info" href="/about">درباره ی قران دانلود</a>
                    <a class="btn btn-success" href="pay">کمک مالی به پروژه</a>
                </div>
            </section>
            <?php get_footer(); ?>
		</main><!-- #main -->
    </div><!-- #primary -->

