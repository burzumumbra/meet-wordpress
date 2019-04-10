<?php
/**
 * Página de app Gallery.
 *
 * @package meet_wordpress
 *
 * Template Name: Gallery
 */
get_header();

wp_enqueue_script('gallery', get_stylesheet_directory_uri() . '/react-apps/gallery/public/index.js', array ( ), '1.0.0', true);
wp_register_style('gallery', get_stylesheet_directory_uri() . '/react-apps/gallery/public/index.css', array(),'1.0.0','all');
?>

<?php if ( have_posts() ) : ?>

	<main>
		<div id="app"> </div>
	</main>

<?php else : ?>

	<main>
		<article>
			<h2>Sin contenido</h2>
		</article>
	</main>

<?php endif; // Ends if have posts. ?>

<?php
get_footer();