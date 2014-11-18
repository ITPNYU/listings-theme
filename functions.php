<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// sort posts by title instead of date and ID
function lt_sort_posts( $query ) {
  $query->set('orderby', 'title');
  $query->set('order', 'ASC');
}
add_action( 'pre_get_posts', 'lt_sort_posts' );
?>
