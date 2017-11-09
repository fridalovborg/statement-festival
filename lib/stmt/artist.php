<?php

function create_post_type() {
  register_post_type( 'artist',
    array(
      'labels' => array(
        'name' => __( 'Artists' ),
        'singular_name' => __( 'Artist' )
      ),
      'supports' => array(
        'title', 
        'editor', 
        'thumbnail'
      ),
      'rewrite' => array('slug' => 'artist'),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );