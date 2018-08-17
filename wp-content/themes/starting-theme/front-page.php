<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php
include(locate_template("inc/page-home/primary-slider.php"));
include(locate_template("inc/page-home/secondary-slider.php"));
include(locate_template("inc/page-elements/solutions.php"));
include(locate_template("inc/page-home/intro.php"));
include(locate_template("inc/page-home/testimonials.php"));
?>

<?php
//get_sidebar();
get_footer();
