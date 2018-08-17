<?php
/**
 * Template Name: Solutions Page
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
include(locate_template("inc/page-solutions/content.php"));
include(locate_template("inc/page-solutions/child.php"));
include(locate_template("inc/page-elements/solutions.php"));
include(locate_template("inc/page-elements/news.php"));
?>

<?php
//get_sidebar();
get_footer();
