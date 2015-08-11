<?php 
// Detect the custom post type PACKAGE category OR PACKAGE categories
$terms = get_the_terms($post->ID, 'package_category');  
// Store them in an array
foreach($terms as $term) {
  $package_categories[] = $term->term_id;
}

//print_r($package_categories);
 
?>
<aside class="medium-4 columns sidebar">
  <div class="map-bg">
    <h2 class="green">Applause!</h2>
      <div class="sidebar-inner-wrap">
<?php
$count = 0;
// If there's a Post in Applause AND Our Favorite Trips
$query = new WP_Query( array( 'posts_per_page' => -1, 'cat' => 22));
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post();
    // Check for current package category
    if (has_term($package_categories, 'package_category')) {
      if ($count < 2) {
        $count++;
        echo '<p>' . excerpt(20) . '</p>';
        $base = get_bloginfo('template_directory');
        echo '<img src="' . $base . '/img/hr.png" class="hr">';
        }
    }    
} } else {
// no posts found
// Fall back to JUST Applause Category
$query = new WP_Query( array( 'posts_per_page' => 1, 'cat' => 22));
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    if ($count < 2) {
        $query->the_post();
        $count++;
        echo '<p>' . excerpt(20) . '</p>';
        $base = get_bloginfo('template_directory');
        echo '<img src="' . $base . '/img/hr.png" class="hr">';
      }
    }
  }
} wp_reset_postdata(); ?>  
      </div>
    <h2 class="red">Travel Tip of the Day</h2>
      <div class="sidebar-inner-wrap">
<?
$query = new WP_Query( array( 'posts_per_page' => -1, 'cat' => 24));
$ttcount = 0;
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post();
    // Check for current package category
    if (has_term($package_categories, 'package_category')) { 
        if(has_post_thumbnail()) {the_post_thumbnail();} 
        echo '<p>' . excerpt(20) . '</p>';
        $base = get_bloginfo('template_directory');
        $ttcount++;
    }    
} }
if ($ttcount < 1) {
// no posts found
// Fall back to JUST Applause Category
$query = new WP_Query( array( 'posts_per_page' => 1, 'cat' => 24));
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
        $query->the_post();
        if(has_post_thumbnail()) {the_post_thumbnail();} 
        echo '<p>' . excerpt(20) . '</p>';     
} } }
 wp_reset_postdata(); ?>  
      </div>
    <h2 class="green">Other Good Stuff</h2>
      <div class="sidebar-inner-wrap">
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Other Good Stuff')) : else : ?>
        <?php endif; ?>
        <img src="<?php bloginfo('template_directory'); ?>/img/hr.png" class="hr">
        
        <div class="center travel-responder">
          <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Bottom of Sidebar')) : else : ?>
          <?php endif; ?>
        </div> 
      </div>
  </div>
</aside>