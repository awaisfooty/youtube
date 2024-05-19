<?php
include_once(get_stylesheet_directory() . '/posts/ocen.php');
include_once(get_stylesheet_directory() . '/posts/framework.php');


    function includes_css_files() {
        wp_enqueue_style( 'slick-1', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', [], '21.2.7', 'all' );
        wp_enqueue_style( 'slick-2', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css', [], '21.2.7', 'all' );
        wp_enqueue_style( 'slick-3', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', [], '21.2.7', 'all' );
        wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', [], '21.2.7', 'all' );
        wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', [], '21.2.7', 'all' );
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    }

    add_action('wp_enqueue_scripts', 'includes_css_files');

    function includes_js_files() {
        wp_enqueue_script( 'slick-min', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array( 'jquery' ), '1.13.2', true );
        wp_enqueue_script( 'Jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array( 'jquery' ), '1.13.2', true );
        wp_enqueue_script( 'bootstrap-min', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '1.13.2', true );
        wp_enqueue_script('script', get_template_directory_uri() . '/js/custom.js');
    }

    add_action('wp_enqueue_scripts', 'includes_js_files');

    
    function create_posttype() {
  
        $labels = array(
            'name'                => _x( 'winter', 'Post Type General Name', 'twentytwentyone' ),
            'singular_name'       => _x( 'winter', 'Post Type Singular Name', 'twentytwentyone' ),
            'menu_name'           => __( 'winter', 'twentytwentyone' ),
            'parent_item_colon'   => __( 'Parent winter', 'twentytwentyone' ),
            'all_items'           => __( 'All winter', 'twentytwentyone' ),
            'view_item'           => __( 'View winter', 'twentytwentyone' ),
            'add_new_item'        => __( 'Add New winter', 'twentytwentyone' ),
            'add_new'             => __( 'Add New', 'twentytwentyone' ),
            'edit_item'           => __( 'Edit winter', 'twentytwentyone' ),
            'update_item'         => __( 'Update winter', 'twentytwentyone' ),
            'search_items'        => __( 'Search winter', 'twentytwentyone' ),
            'not_found'           => __( 'Not Found', 'twentytwentyone' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
        );
      
        register_post_type( 'winter',
            array(
                'labels' => $labels,
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'winter'),
                'supports'  => array( 'title', 'editor', 'author', 'thumbnail' ),
                'taxonomies' => array( 'category', 'post_tag' ),
                'show_in_rest' => true,
      
            )
        );
      
      }
      
      
      add_action( 'init', 'create_posttype' );


// custom post type
function create_posttype_summer() {
  
    $labels = array(
        'name'                => _x( 'summer', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'summer', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'summer', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent summmer', 'twentytwentyone' ),
        'all_items'           => __( 'All summer', 'twentytwentyone' ),
        'view_item'           => __( 'View summmer', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New summmer', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit summmer', 'twentytwentyone' ),
        'update_item'         => __( 'Update summmer', 'twentytwentyone' ),
        'search_items'        => __( 'Search summmer', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );

    register_post_type( 'summer',
        array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'summer'),
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail' ),
            'taxonomies' => array( 'category', 'post_tag' ),
            'show_in_rest' => true,

        )
    );

}
add_action( 'init', 'create_posttype_summer' );

// custom post type

// custom post type


// custom post type
function create_posttype_hosting() {
  
    $labels = array(
        'name'                => _x( 'hosting', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'hosting', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'hosting', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent hosting', 'twentytwentyone' ),
        'all_items'           => __( 'All hosting', 'twentytwentyone' ),
        'view_item'           => __( 'View hosting', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New hosting', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit hosting', 'twentytwentyone' ),
        'update_item'         => __( 'Update hosting', 'twentytwentyone' ),
        'search_items'        => __( 'Search hosting', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );

    register_post_type( 'hosting',
        array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'hosting'),
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail' ),
            'taxonomies' => array( 'category', 'post_tag' ),
            'show_in_rest' => true,

        )
    );

}
add_action( 'init', 'create_posttype_hosting' );

// CEO
function create_posttype_ceo() {
  
    $labels = array(
        'name'                => _x( 'ceo', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'ceo', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'ceo', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent ceo', 'twentytwentyone' ),
        'all_items'           => __( 'All ceo', 'twentytwentyone' ),
        'view_item'           => __( 'View ceo', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New ceo', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit ceo', 'twentytwentyone' ),
        'update_item'         => __( 'Update ceo', 'twentytwentyone' ),
        'search_items'        => __( 'Search ceo', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );

    register_post_type( 'ceo',
        array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'ceo'),
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail' ),
            'taxonomies' => array( 'category', 'post_tag' ),
            'show_in_rest' => true,

        )
    );

}


// Images
add_theme_support('post-thumbnails');

function my_data($marks){
    print_r($marks);
    echo $marks;    


    if($marks > 90){
        echo "A+";
    } elseif($marks > 80){
        echo "A";
    } elseif($marks > 70){
        echo "B";
    }elseif($marks > 60){
        echo "C";
    }elseif($marks > 50){
        echo "D";
    }elseif($marks > 40){
        echo "E";
    }elseif($marks > 30){
        echo "F";
    }else{
        echo"Wrong way";  
    }
            
}