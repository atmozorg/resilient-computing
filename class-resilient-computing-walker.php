<?php

class Resilient_Computing_Walker extends Walker_Nav_Menu {
	// public function start_lvl( &$output, $depth = 0, $args = null ) {
	// 	$output .= '<ul>';
	// }

	// public function end_lvl( &$output, $depth = 0, $args = null ) {
	// 	$output .= '</ul>';
	// }

	public function start_el(&$output, $item, $depth=0, $args=null, $id=0) {
        // Retrieve existing classes from the WordPress menu editor and core
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        
        // Add your custom classes
        $classes[] = 'p-2';
        if( $args->menu === 'header' ) {
            $classes[] = 'text-[#e8e8e6]';
        }
        if( $item->current ) {
            // It's cleaner to add these as separate classes
            $classes[] = '[&_a]:border-b-2';
            $classes[] = '[&_a]:border-b-orange';
            $classes[] = '[&_a]:pb-2';
        }

        // Combine all classes into a space-separated string
        $class_names = implode( ' ', array_filter( $classes ) );

        // Output the <li> element with the combined classes and the link
        $output .= sprintf( '<li class="%s"><a href="%s">%s</a>', esc_attr( $class_names ), $item->url, $item->title );
    }

	public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}