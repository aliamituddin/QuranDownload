<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title h1 mt-2">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<?php qurandl_post_thumbnail(); ?>
	<div class="entry-content">
		<?php the_content(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
