<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">


		<div class="container-fluid">

			<div class="row">
				<div class="col-md-2 site-branding">

					<?php $description = get_bloginfo( 'description', 'display' ); ?>

					<img src="<?php echo get_template_directory_uri(); ?>/images/espni-logo.png" alt="<?php bloginfo( 'name' ); ?> | <?php echo $description ?>" />

				</div><!-- /.col-md-2 -->

				<div class="col-md-10">
					<!-- Static navbar -->
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
								<?php wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id' => 'navbar',
									'container_id' => 'navbar',
									'container_class' => 'navbar-collapse collapse',
									'menu_class' => 'navbar-collapse',
									'items_wrap' => '<ul id="" class="nav navbar-nav navbar-right">%3$s</ul>' ) );
									?>
								<ul class="nav navbar-nav navbar-right">
									<li class="quote"><a href="./">Get a quote</a></li>
								</ul>
						</div><!--/.container-fluid -->
					</nav><!-- #site-navigation -->
				</div><!-- /.col-md-10 -->
			</div><!-- /.row -->

		</div><!-- /.container-fluid -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
