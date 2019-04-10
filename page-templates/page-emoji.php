<?php
/**
 * Página de app Emoji.
 *
 * @package meet_wordpress
 *
 * Template Name: Emoji
 */
get_header();
wp_enqueue_script( 'emoji_react', get_stylesheet_directory_uri() . '/react-apps/emoji/dist/app.min.js', array ( ), '1.0.0', true); 
//wp_enqueue_script( 'emoji_react', get_stylesheet_directory_uri() . '/react-apps/emoji/public/index.js', array ( ), '1.0.0', true); 
?>

<?php if ( have_posts() ) : ?>

	<main>
        <?php
            the_title();
        ?>
        <?php   
            $postid = get_the_ID();
            echo get_the_post_thumbnail( $postid, 'large', array( 'class' => 'post-thumbnail' ) ); // Agregando clase!
        ?>
		<div id="app"> </div>
        
        <?php
            the_content( get_the_ID() );
        ?>
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