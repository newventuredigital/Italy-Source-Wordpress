<?php get_header(); ?>
<section class="level-2">
  <div class="row">
    <div class="medium-8 columns">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php $url = get_the_permalink(); ?>
      <h3><a href="<?php echo $url; ?>"><?php the_title(); ?></a></h3>
      <p><?php echo excerpt(40); ?></p>
      <p><?php edit_post_link(); ?></p>
      <hr>
      <?php endwhile; endif; ?>   
    </div>
    <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>