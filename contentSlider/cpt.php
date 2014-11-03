<?php

add_action( 'init', 'rlp_cpt' );
function rlp_cpt() {

    $options = get_option( 'rlp_settings' );
    $name = $options['rlp_text_field_0'];

    $labels = array(
        'name' => $name,
        'singular_name' => $name,
        'add_new' => 'Add New ' .  $name,
        'add_new_item' => 'Add New ' .  $name,
        'edit_item' => 'Edit ' . $name,
        'new_item' => 'New ' . $name,
        'view_item' => 'View ' .  $name,
        'search_items' => 'Search ' . $name,
        'not_found' =>  'No ' . $name . 'found',
        'not_found_in_trash' => 'No ' . $name . ' in the trash',
        'parent_item_colon' => '',
    );
 
    register_post_type( $name, array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 10,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats', 'page-attributes' ),
    ) );
}



 //----------------------------------testimonials custom post tyepw--------------------------------------------------------->


// $var = 'testimonial';

// add_action( 'init', 'rlp_testimonial' );
// function rlp_testimonial() {
//     $var = 'testimonial';

//     $labels = array(
//         'name' => $var,
//         'singular_name' => $var,
//         'add_new' => 'Add New ' .  $var,
//         'add_new_item' => 'Add New ' . $var,
//         'edit_item' => 'Edit ' . $var,
//         'new_item' => 'New ' . $var,
//         'view_item' => 'View ' . $var,
//         'search_items' => 'Search ' . $var,
//         'not_found' =>  'No ' . $var . 'found',
//         'not_found_in_trash' => 'No Testimonials in the trash',
//         'parent_item_colon' => '',
//     );
 
//     register_post_type( $var, array(
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'exclude_from_search' => true,
//         'query_var' => true,
//         'rewrite' => true,
//         'capability_type' => 'post',
//         'has_archive' => true,
//         'hierarchical' => false,
//         'menu_position' => 10,
//         'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats', 'page-attributes' ),
//     ) );
// }