<?php

require __DIR__ . '/class-resilient-computing-walker.php';

add_action( 'load-page.php', 'resilient_computing_enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'resilient_computing_enqueue_scripts' );

function resilient_computing_enqueue_scripts() {
	wp_enqueue_style( 'resilient-computing', get_stylesheet_directory_uri() . '/output.css' );
}

add_action( 'after_setup_theme', function() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', [
		'unlink-homepage-logo' => true,
	] );

	register_nav_menus( [
		'header' => __( 'Header Menu', 'resilient-technology' ),
		'footer'  => __( 'Footer Menu', 'resilient-technology' ),
	] );
} );

add_action( 'init', function() {
	register_block_type( __DIR__ . '/blocks/counters' );
	register_block_type( __DIR__ . '/blocks/hero' );
	register_block_type( __DIR__ . '/blocks/links' );
	register_block_type( __DIR__ . '/blocks/text-media' );
	register_block_type( __DIR__ . '/blocks/timeline' );
});

////

function the_phone_number() {
	echo '303.333.3333';
}

function the_address() {
	echo '269 Terrance Loop, Bozeman, MT 59718-8920';
}

function acf_image( $image, string $size = 'medium_large', $attributes = [] ) {
	echo wp_get_attachment_image( $image[ 'ID' ], $size, false, $attributes );
}

function acf_link( $link, string $class = '' ) {
	if( ! is_array( $link ) ) {
		return;
	}
	printf(
		'<a href="%s" target="%s" class="%s">%s</a>',
		$link[ 'url' ],
		$link[ 'target' ] ?: '_self',
		$class,
		$link[ 'title' ]
	);
}