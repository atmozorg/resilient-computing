<?php

class Resilient_Computing_Walker extends Walker_Nav_Menu {
	// public function start_lvl( &$output, $depth = 0, $args = null ) {
	// 	$output .= '<ul>';
	// }

	// public function end_lvl( &$output, $depth = 0, $args = null ) {
	// 	$output .= '</ul>';
	// }

	public function start_el(&$output, $item, $depth=0, $args=null, $id=0) {
		$class = 'p-2';
		if( $args->menu === 'header' ) {
			$class .= ' text-[#e8e8e6]';
		}
		if( $item->current ) {
			$class .= ' [&_a]:border-b-2 [&_a]:border-b-orange [&_a]:pb-2';
		}
		$output .= sprintf( '<li class="%s"><a href="%s">%s</a>', $class, $item->url, $item->title );
	}

	public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}