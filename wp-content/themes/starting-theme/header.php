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
<link type="text/plain" rel="robots" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/robots.txt" />
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#ee5f1e",
      "text": "#ffffff"
    },
    "button": {
      "background": "#ffffff",
      "text": "#ee5f1e"
    }
  },
  "theme": "classic",
  "position": "bottom-left",
  "content": {
    "dismiss": "OK!",
    "href": "/data-policy/"
  }
})});
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">


		<div class="container-fluid">

			<div class="row">
				<div class="col-md-2 col-xs-6 site-branding">

					<?php $description = get_bloginfo( 'description', 'display' ); ?>

					<a href="/">


							<img src="<?php echo get_template_directory_uri(); ?>/images/<?php if( is_front_page() ) : ?>espni-logo<?php else : ?>espni-logo-main<?php endif ?>.png" alt="<?php bloginfo( 'name' ); ?> | <?php echo $description ?>" />

					</a>

				</div><!-- /.col-md-2 -->

				<div class="col-md-8">
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
						</div><!--/.container-fluid -->
					</nav><!-- #site-navigation -->
				</div><!-- /.col-md-8 -->
				<div class="col-md-2 right-nav">
					<ul class="nav navbar-nav social">
						<li class="hidden-xs hidden-sm hidden-md">
							<a href="#">
								<?php if( is_front_page() ) : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" />
								<?php else : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/facebook-black.svg" />
								<?php endif; ?>
								</a></li>
						<li class="hidden-xs hidden-sm hidden-md">
							<a href="#">
							<?php if( is_front_page() ) : ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" />
							<?php else : ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/twitter-black.svg" />
							<?php endif; ?>
							</a>
						</li>
						<li class="quote hidden-xs hidden-sm"><a href="/contact">Get a quote <img src="<?php echo get_template_directory_uri(); ?>/images/quote-icon.svg" /></a></li>
					</ul>
				</div>

			</div><!-- /.row -->

			<?php if( !is_front_page() ) : ?>

				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '
				<p class="breadcrumbs">','</p>
				' );
				}
				?>

			<?php endif ?>

		</div><!-- /.container-fluid -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
