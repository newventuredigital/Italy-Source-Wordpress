<?php /* Template Name: Package Category Listing */ ?>
<?php get_header(); ?>

<section class="level-2">
  <div class="row">
    <div class="medium-8 columns">
      <h1><?php the_title(); ?></h1>

<?php
// Only display the packages that pertain to this category listing
$cat = get_the_title();

$args = array(
  'posts_per_page'   => -1,
  'category_name'    => $cat,
  'post_type'        => 'package',
);
$posts_array = get_posts( $args );
foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
  <li>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </li>
<?php endforeach; 
wp_reset_postdata();?>

    </div>
    <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>