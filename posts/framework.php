<?php
function create_posttype_framework() {
  
    $labels = array(
        'name'                => _x( 'framework', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'framework', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'framework', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent framework', 'twentytwentyone' ),
        'all_items'           => __( 'All framework', 'twentytwentyone' ),
        'view_item'           => __( 'View framework', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New framework', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit framework', 'twentytwentyone' ),
        'update_item'         => __( 'Update framework', 'twentytwentyone' ),
        'search_items'        => __( 'Search framework', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );

    register_post_type( 'framework',
        array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'framework'),
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail' ),
            'taxonomies' => array( 'category', 'post_tag' ),
            'show_in_rest' => true,

        )
    );

}
add_action( 'init', 'create_posttype_framework' );
?>