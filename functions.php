<?php
 
function excerpt($limit) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
  array_pop($excerpt);
  $excerpt = implode(" ",$excerpt).' &hellip;';
} else { $excerpt = implode(" ",$excerpt);} 
$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
$link = get_the_permalink();
$excerpt .= ' <a href="' . $link . '" class="read-more">Read More </a>';
return $excerpt;
}
function content($limit) {
$content = explode(' ', get_the_content(), $limit);
if (count($content)>=$limit) {array_pop($content);
  $content = implode(" ",$content).'...';
} else {$content = implode(" ",$content);
} $content = preg_replace('/\[.+\]/','', $content);
$content = apply_filters('the_content', $content); 
$content = str_replace(']]>', ']]&gt;', $content);
return $content;
} 

add_theme_support( 'post-thumbnails' ); 

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function custom_sidebars() {

  // Register Sidebars
  $path_start = '<img src="';
  $site = get_bloginfo('template_directory');
  $path_end = '/img/hr.png" class="hr"></p>';

  $full = $path_start . $site . $path_end;

  $args = array(
    'id'            => 'applause-1',
    'name'          => 'Applause 1',
    'description'   => 'Main sidebar, above a horizontal rule',
    'before_widget' => '<p>',
    'after_widget'  => $full,
    'before_title'  => '',
    'after_title'   => ''
  );
  register_sidebar( $args );
  $args = array(
    'id'            => 'applause-2',
    'name'          => 'Applause 2',
    'description'   => 'Main sidebar, below 1st horizontal rule',
    'before_widget' => '',
    'after_widget'  => ''
  );
  register_sidebar( $args );
  $args = array(
    'id'            => 'travel-tip-of-the-day',
    'name'          => 'Travel Tip of the Day',
    'description'   => 'Main sidebar',
    'before_widget' => '',
    'after_widget'  => ''
  );
  register_sidebar( $args );
  $args = array(
    'id'            => 'other-good-stuff',
    'name'          => 'Other Good Stuff',
    'description'   => 'Main sidebar',
    'before_widget' => '',
    'after_widget'  => ''
  );
  register_sidebar( $args );
  $args = array(
    'id'            => 'sidebar-bottom',
    'name'          => 'Bottom of Sidebar',
    'description'   => 'Main sidebar',
    'before_widget' => '',
    'after_widget'  => ''
  );
  register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_sidebars' );

add_action( 'init', 'package_pos' );
function package_pos() {
  $labels = array(
    'name'               => _x( 'Packages', 'post type general name' ),
    'singular_name'      => _x( 'Package', 'post type singular name' ),
    'menu_name'          => _x( 'Packages', 'admin menu' ),
    'name_admin_bar'     => _x( 'Package', 'add new on admin bar' ),
    'add_new'            => _x( 'Add New', 'package' ),
    'add_new_item'       => __( 'Add New Package' ),
    'new_item'           => __( 'New Package' ),
    'edit_item'          => __( 'Edit Package' ),
    'view_item'          => __( 'View Package' ),
    'all_items'          => __( 'All Packages' ),
    'search_items'       => __( 'Search Packages' ),
    'parent_item_colon'  => __( 'Parent Packages:' ),
    'not_found'          => __( 'No packages found.' ),
    'not_found_in_trash' => __( 'No packages found in Trash.' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.'),
    'taxonomies' => array('category'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'package' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'menu_icon'      => 'dashicons-products',
    'supports'           => array( 'title', 'editor', 'thumbnail' )
  );

  register_post_type( 'package', $args );
}


?>