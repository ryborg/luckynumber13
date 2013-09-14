<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'jjb_toolkit',
		array(
			'labels' => array(
				'name' => __( 'Toolkit' ),
				'singular_name' => __( 'Tool' )
			),
			'public' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'taxonomies' => array('post_tag', 'category'),
			'supports' => array('title', 'editor', 'thumbnail'),
			'rewrite' => array('slug' => 'toolkit'),
		)
	);
}
function mason_script() {
if ( is_post_type( 'jjb_toolkit'))
		wp_enqueue_script( 'jquery-masonry' );
		add_action( 'wp_enqueue_scripts', 'mason_script' );
		}