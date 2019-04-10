<?php
add_action( 'wp_enqueue_scripts', 'react_apps_enqueue' );
/** Enqueue Apps
 */
function react_apps_enqueue() {
	if ( is_page( 'Emoji' ) ) {
        wp_enqueue_script( 
            'emoji_react',
            get_stylesheet_directory_uri() . '/react-apps/emoji/public/index.js',
            array (  ), '1.0.0',
             true
        );
    }
    if ( is_page( 'Gallery' ) ) {
        wp_enqueue_script( 
            'gallery',
            get_stylesheet_directory_uri() . '/react-apps/gallery/public/index.js',
            array (  ), '1.0.0',
             true
        );
        wp_register_style(
			'gallery',
			get_template_directory_uri() . '/react-apps/gallery/public/index.css',
			array(),
			'1.0.0',
			'all'
		);
	}
}