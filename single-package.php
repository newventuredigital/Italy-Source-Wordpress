<?php get_header(); ?>
<section class="level-2 package-post-type">
  <div class="row">
    <div class="medium-8 columns">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1><?php if (get_field('short_title')) { the_field('short_title'); } else { the_title(); } ?></h1>
      
      <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

      <?php the_content(); ?>
      <p><?php edit_post_link(); ?></p>
      <?php endwhile; endif; ?>   
    </div>
    <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>