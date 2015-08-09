<?php get_header(); ?>
<section class="level-2">
  <div class="row">
    <div class="medium-8 columns">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
      <p><?php edit_post_link(); ?></p>
      <?php endwhile; endif; ?>   
    </div>
    <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>