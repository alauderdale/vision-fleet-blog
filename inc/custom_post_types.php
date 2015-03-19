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

    //add case studies
    $people_args = array(
      'public' => true,
      'label'  => 'Case Studies',
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'case_study', $people_args );

    //add products
    $people_args = array(
      'public' => true,
      'label'  => 'Products',
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'product', $people_args );

    //add jobs
    $people_args = array(
      'public' => true,
      'label'  => 'Jobs',
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'job', $people_args );

    //add press
    $people_args = array(
      'public' => true,
      'label'  => 'Press',
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'press', $people_args );

    
}

add_action( 'init', 'create_my_post_types' );