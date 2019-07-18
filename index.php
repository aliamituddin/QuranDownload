<?php get_header();?>
<div id="primary" class="content-area">
		<main id="main">
            <h2 class="text-primary m-3 mt-5 text-center">دانلود قران با صوت قاریان برتر</h2>
            <div  id="qari-list" class="col-6 mx-auto my-5">
                <input class="form-control form-control-lg" onkeyup="qariListSearch()" name="search" id="search" placeholder="نام قاری مورد نظر را وارد کنید">
            </div>
            <div class="row col-md-10 mx-auto" id="listQariContainer">
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
                    <a class="btn btn-info" href="<?=get_site_url()?>/about">درباره ی قران دانلود</a>
                    <a class="btn btn-success" href="<?php echo esc_url( home_url( '/' ) ); ?>">کمک مالی به پروژه</a>
                </div>
            </section>
		</main><!-- #main -->
    </div><!-- #primary -->
    <script>
        function qariListSearch() {
            var input, filter, listQariContainer, article, a, i, txtValue;
            input = document.getElementById("search");
            filter = input.value;
            listQariContainer = document.getElementById("listQariContainer");
            article = listQariContainer.getElementsByTagName("article");
            for (i = 0; i < article.length; i++) {
                h5 = article[i].getElementsByTagName("h5")[0];
                txtValue = h5.textContent || h5.innerText;
                if (txtValue.indexOf(filter) > -1) {
                    article[i].style.display = "";
                } else {
                    article[i].style.display = "none";
                }
            }
        }
</script>
<?php get_footer(); ?>

