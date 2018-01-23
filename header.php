<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="author" content="<?php bloginfo( 'author' ); ?>">
    <title>
		<?php bloginfo( 'name' ); ?>
    </title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                Menu
            </button>
            <a class="navbar-brand navbar-left" href="<?php bloginfo( 'url' ) ?>">
				<?php
				// check to see if the logo exists and add it to the page
				if ( get_theme_mod( 'your_theme_logo' ) ) : ?>

                    <img src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>"
                         alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

				<?php // add a fallback if the logo doesn't exist
				else : ?>

                    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>

				<?php endif; ?>

            </a>
        </div>
		<?php
		wp_nav_menu( array(
				'menu'            => 'primary',
				'theme_location'  => 'primary',
				'depth'           => 2,
				'container'       => 'div',
				'container_class' => 'navbar-collapse collapse navbar-right',
				'container_id'    => 'navbar',
				'menu_class'      => 'nav navbar-nav',
				'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
				'walker'          => new wp_bootstrap_navwalker()
			)
		);
		?>
    </div>
</nav>
<?php if ( ! is_front_page() ) : ?>
<div class="container">
	<?php else: ?>
    <div class="container-fluid">
		<?php endif; ?>
