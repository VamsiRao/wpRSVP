<?php 

if ( ! function_exists( 'cc_scripts' ) ) {
    function cc_scripts() {
        wp_enqueue_script('cc-bootstrap', get_template_directory_uri().'/dist/lib/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('main', get_template_directory_uri().'/main.js', array('jquery', 'cc-bootstrap'), '1.0.0', true);
        wp_enqueue_script('cc-custom-bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
        wp_enqueue_script('cc-custom-fontawesome','https://use.fontawesome.com/ffc2c94a85.js');
        wp_enqueue_script('cc-google-jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
        wp_localize_script( 'main', 'PARAMS', array('ajaxurl' => admin_url('admin-ajax.php')) );

    }
    add_action('wp_enqueue_scripts','cc_scripts');
}

if ( ! function_exists( 'cc_styles' ) ) {
    function cc_styles() {  
        wp_enqueue_style('cc-bootstrap', get_template_directory_uri().'/dist/lib/css/bootstrap.min.css');
        wp_enqueue_style('cc-custom-bs','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
        wp_enqueue_style('style', get_template_directory_uri().'/style.css');

    }
    add_action('wp_enqueue_scripts','cc_styles');
}

//add filter to remove margin above html
add_filter('show_admin_bar','__return_false');

////////////////////////////////////////////////
// Custom Post Type : Events
////////////////////////////////////////////////
function eventCustomPostType(){
    $labels=array(
            'name'=>'Event',
            'singular_name'=>'Event',
            'add_new'=>'Add New Event',
            'add_event_item'=>'Add New Event',
            'edit_item'=>'Edit Event',
            'all_items'=>'All Events',
            
        );
    $args= array(
            'labels'=>$labels,
            'public'=>true,
            'capability_type'=>'post',
            'hierarchical'=>false,
            'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
            //'taxonomies'=> array('category','post_tag'),
            'menu_position'=>7,
       );
    register_post_type('event',$args);
}
add_action('init','eventCustomPostType');



function addEventMetaBoxes(){
    add_meta_box('');
}

///////////////////////////////////////////////////////////
function wpmudev_create_post_type() {
    // set up labels
    $labels = array(
        'name' => 'Products',
        'singular_name' => 'Product',
        'add_new' => 'Add New Product',
        'add_new_item' => 'Add New Product',
        'edit_item' => 'Edit Product',
        'new_item' => 'New Product',
        'all_items' => 'All Products',
        'view_item' => 'View Product',
        'search_items' => 'Search Products',
        'not_found' =>  'No Products Found',
        'not_found_in_trash' => 'No Products found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Products',
    );
    //register post type
    register_post_type( 'product', array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
        'taxonomies' => array( 'post_tag', 'category' ),    
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => array( 'slug' => 'products' ),
        )
    );

}
add_action( 'init', 'wpmudev_create_post_type' );
///////////////////////////////////////////////////////////
function guestCustomPostType(){
    $labels=array(
            'name'=>'Guest',
            'singular_name'=>'Guest',
            'add_new'=>'Add New Guest',
            'add_event_item'=>'Add New Guest',
            'edit_item'=>'Edit Guest',
            'all_items'=>'All Guests',
            
        );
    $args= array(
            'labels'=>$labels,
            'public'=>true,
            'capability_type'=>'post',
            'hierarchical'=>false,
            'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
            //'taxonomies'=> array('category','post_tag'),
            'menu_position'=>7,
       );
    register_post_type('guest',$args);
}
add_action('init','guestCustomPostType');










?>
