
<section class="blog">
  <div class="row">
    <div class="large-12 columns show-for-large-up">
      <img src="<?php bloginfo('template_directory'); ?>/img/rule-triangle.png" class="rule-triangle">
    </div>
  </div>
<?php $args = array('posts_per_page'   => 1, 'category_name'    => 'Travel News',);
$myposts = get_posts( $args ); 
foreach ( $myposts as $post ) : setup_postdata( $post );
$url = get_the_permalink();
?>
  <div class="row">
    <div class="large-4 columns small-space-below medium-space-below">
      <a href="<?php echo $url; ?>">
        <div class="table">
          <div class="table-left">
            <img src="<?php bloginfo('template_directory'); ?>/img/travel-news.jpg" class="featured">
          </div>
          <div class="table-right">
            <h3>Travel News</h3>
            <div class="subhead">7/14/2015</div>
            <div class="subhead"><?php the_title(); ?></div>
          </div>
        </div>
      </a>
      <p><?php echo excerpt(42); ?></p>
    </div>
<?php endforeach; 
wp_reset_postdata();?>

<?php 
$args = array('page_id' => 201); 
$the_query = new WP_Query( $args );
$url = get_the_permalink(201);
if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="large-4 columns small-space-below medium-space-below">
      <a href="<?php echo $url; ?>">
        <div class="table">
          <div class="table-left">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo-europe-source.png" class="featured">
          </div>
          <div class="table-right">
            <h3><?php the_title(); ?></h3>
            <?php if (get_field('footer_subhead')) { ?><div class="subhead"><?php the_field('footer_subhead'); ?></div><?php } ?>
          </div>
        </div>
      </a>
      <?php the_content(); ?>
      <?php edit_post_link(); ?>
    </div>
<?php endwhile; endif; ?>

<?php 
$args = array('page_id' => 202); 
$the_query = new WP_Query( $args );
$url = get_the_permalink(202);
if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="large-4 columns">
      <a href="<?php echo $url; ?>">
        <div class="table">
          <div class="table-left">
            <img src="<?php bloginfo('template_directory'); ?>/img/map-thumbnail.jpg" class="featured">
          </div>
          <div class="table-right">
            <h3><?php the_title(); ?></h3>
            <?php if (get_field('footer_subhead')) { ?><div class="subhead"><?php the_field('footer_subhead'); ?></div><?php } ?>
          </div>
        </div>
      </a>
      <?php the_content(); ?>
      <?php edit_post_link(); ?>
    </div>
<?php endwhile; endif; ?>
  </div>
</section>

<footer>
  <div class="row">
    <div class="large-12 columns">
      <nav>
        <?php wp_nav_menu(array( 'container' => '', 'depth' => 1 )) ?>
      </nav>

      <ul class="logo-array footer-array">
        <li><a href="#" id="travel-guard"></a></li>
        <li><a href="#" id="asta"></a></li>
        <li><a href="#" id="bbb"></a></li>
        <li><a href="#" id="fb"></a></li>
      </ul>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada mauris dui, at auctor mauris tempor ac. In hac habitasse platea dictumst. Vestibulum sed dolor velit. Donec posuere nisi ut urna tempor gravida. Cras efficitur venenatis feugiat. Nullam fringilla risus pulvinar, bibendum ligula at, sagittis eros. Nulla rutrum sodales felis nec posuere. Pellentesque vel consectetur lectus. In tincidunt arcu ex, vitae sagittis nibh malesuada a. Morbi tincidunt cursus lectus non venenatis.</p>

    </div>
  </div>
</footer>

<!-- off Canvas -->
<a class="exit-off-canvas"></a>
</div>
</div>
<!-- off Canvas -->
    
<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
<script>
$(document).foundation();

</script>
</body>
</html>