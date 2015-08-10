<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="hero">
  <div class="body-wrap">
    <div class="row">
      <div class="medium-4 columns small-text-center"><?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?></div>
      <div class="medium-8 columns">
        <h1><?php the_field('site_welcome'); ?></h1>
        <?php the_content(); ?>
        <p><?php edit_post_link(); ?></p>
      </div>
    </div>
</section>
<?php endwhile; endif; ?>
<section class="packages">
  <div class="row">

<ul>
<?php
global $post;
$args = array('numberposts' => -1, 'post_parent' => 18, 'post_type' => 'page',);
$myposts = get_posts( $args );
$count = 1;
foreach( $myposts as $post ) :
setup_postdata($post); ?>
  
  <div class="medium-6 large-4 columns single-package">
    <a href="<?php the_permalink(); ?>">
      <?php if (has_post_thumbnail()) { the_post_thumbnail(); } else { ?><img src="<?php bloginfo('template_directory'); ?>/img/arch.jpg"><?php } ?>
      <h2><?php the_title(); ?></h2>
    </a>
  </div>

  <?php if ($count == 3 || $count ==6) { ?>
    <div class="large-12 columns show-for-large-up">
      <img src="<?php bloginfo('template_directory'); ?>/img/rule-wave.png" alt="">
    </div>
  <?php } $count++; ?>
<?php endforeach; 
wp_reset_postdata(); ?>
</ul>
  </div>
</section>



<?php get_footer(); ?>