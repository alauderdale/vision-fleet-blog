<?php

//create post types


function create_my_post_types() {

    //add people
    $people_args = array(
      'public' => true,
      'label'  => 'People',
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'person', $people_args );

    
}

add_action( 'init', 'create_my_post_types' );