<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site fuild-container">
	<header class="site-header">
        <div class="navbar navbar-expand-lg bg-dark" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle bg-light border-0 p-1 m-l-2" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-stream"></i>
                    <span class="sr-only">Toggle navigation</span>
                </button>
            </div>
            <?php if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }?>
            <div class="navbar-collapse collapse">
                <?php  /* menu */
                wp_nav_menu( array(
                        'menu'              => 'menu-1',
                        'theme_location'    => 'primary-menu',
                        'depth'             => 5,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse ',
                        'menu_class'        => 'nav navbar-nav  ',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                );
                //get_search_form();
                ?>
            </div>
        </div><!-- Navigation -->
    </header><!-- #masthead -->

	<div id="content" class="site-content">
