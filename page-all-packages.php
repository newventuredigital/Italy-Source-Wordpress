<?php /* Template Name: All Packages */ ?>
<?php get_header(); ?>

<section class="level-2">
  <div class="row">
    <div class="medium-8 columns package-category-listing ">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php if (class_exists('MultiPostThumbnails')) :
      MultiPostThumbnails::the_post_thumbnail(
        get_post_type(), 'landing-page-image'); endif; ?>

      <div class="package-intro"><?php the_content(); ?></div>
      <p><?php edit_post_link(); ?></p>
      <?php endwhile; endif; ?>  
<?php
// Only display the packages that pertain to this category listing
$cat = get_the_title();

$args = array(
  'posts_per_page'   => -1,
  'post_type'        => 'package'
);
$posts_array = get_posts( $args );
foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
    <h4>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h4>
    <p><?php if (get_field('category_blurb')) { the_field('category_blurb'); } ?></p>
<?php endforeach; 
wp_reset_postdata();?>

    </div>
    <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>