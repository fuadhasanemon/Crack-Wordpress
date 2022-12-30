<?php 


function add_custom_class_to_single_post( $classes ) {
  if ( is_singular() && get_post_type() == 'your-post-type' ) {
    $classes[] = 'custom-class';
  }
  return $classes;
}
add_filter( 'body_class', 'add_custom_class_to_single_post' );
