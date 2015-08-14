<?php get_header(); ?>
<section class="level-2">
  <div class="row">
    <div class="medium-8 columns">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h3><?php the_title(); ?></h3>
      <?php if (has_post_thumbnail()) {the_post_thumbnail('large', array( 'class' => 'content-featured-image' )); );} ?>
      <p><?php the_content(); ?></p>
      <p><?php edit_post_link(); ?></p>
      <hr>
      <?php endwhile; endif; ?>   
    </div>
    <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>