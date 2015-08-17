<div class="row back-to-top">
  <div class="large-12 columns text-center">
    <a href="#top"><i class="fa fa-chevron-up"></i><br>Back to Top</a>

  </div>
</div>

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
            <?php if (has_post_thumbnail()) { the_post_thumbnail('thumbnail', array( 'class' => 'featured' )); } ?>
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
            <?php if (has_post_thumbnail()) { the_post_thumbnail('thumbnail', array( 'class' => 'featured' )); } ?>
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
            <?php if (has_post_thumbnail()) { the_post_thumbnail('thumbnail', array( 'class' => 'featured' )); } ?>
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
        <li><div class="phone-wrap"><a href="tel:888-868-1150" id="phone">888-868-1150</a></div></li>
        <li><a href="http://105works.com/italysource//?page_id=50" id="travel-guard"></a></li>
        <li><a href="http://www.travelsense.org/agents/agntdetail.cfm?i=900144060&firstName=Barbara&lastName=Sobol&companyName=ItalySource,%20LLC" id="asta" target="_blank"></a></li>
        <li><a href="http://www.bbb.org/washington-dc-eastern-pa/business-reviews/travel-agencies-and-bureaus/italysource-llc-in-charles-town-wv-7004595/" id="bbb" target="_blank"></a></li>
        <li><a href="https://www.facebook.com/pages/ItalySource-LLC/197999614052?fref=ts" id="fb" target="_blank"></a></li>
      </ul>

      <div class="footer-address">
        <p>ItalySource LLC &bull; 199 Mill Lane &bull; Charles Town, WV 25414 (near Washington, D.C.) &bull; Fax: 304-728-4763 &bull; Email: <a href="mailto:travels@italysource.com">travels@italysource.com</a></p>
      </div>

<?php 
$args = array('page_id' => 251); 
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <?php the_content(); ?>
<?php endwhile; endif; ?>
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

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 300);
        return false;
      }
    }
  });
});


</script>
</body>
</html>