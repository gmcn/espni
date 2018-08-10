<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	</div><!-- #content -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<?php
	include(locate_template("inc/footer/contact.php"));
	include(locate_template("inc/footer/sitemap.php"));
	include(locate_template("inc/footer/newsletter.php"));
	include(locate_template("inc/footer/signature.php"));
	?>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
