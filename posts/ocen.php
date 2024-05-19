<?php
function create_posttype_ocean() {
  
    $labels = array(
        'name'                => _x( 'ocean', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'ocean', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'ocean', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent ocean', 'twentytwentyone' ),
        'all_items'           => __( 'All ocean', 'twentytwentyone' ),
        'view_item'           => __( 'View ocean', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New ocean', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit ocean', 'twentytwentyone' ),
        'update_item'         => __( 'Update ocean', 'twentytwentyone' ),
        'search_items'        => __( 'Search ocean', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );

    register_post_type( 'ocean',
        array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'ocean'),
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail' ),
            'taxonomies' => array( 'category', 'post_tag' ),
            'show_in_rest' => true,

        )
    );

}
add_action( 'init', 'create_posttype_ocean' );
?>