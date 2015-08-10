<section class="blog">
  <div class="row">
    <div class="large-12 columns show-for-large-up">
      <img src="<?php bloginfo('template_directory'); ?>/img/rule-triangle.png" class="rule-triangle">
    </div>
  </div>
  <div class="row">
    <div class="large-4 columns small-space-below medium-space-below">
      <a href="#">
        <div class="table">
          <div class="table-left">
            <img src="<?php bloginfo('template_directory'); ?>/img/travel-news.jpg" class="featured">
          </div>
          <div class="table-right">
            <h3>Travel News</h3>
            <div class="subhead">7/14/2015</div>
            <div class="subhead">Tureic Temo Totaspe</div>
          </div>
        </div>
      </a>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada mauris dui, at auctor mauris tempor ac. In hac habitasse platea dictumst. Vestibulum sed dolor velit. Donec posuere nisi ut urna tempor gravida. Cras efficitur venenatis feugiat. <a href="#" class="read-more">(read more)</a></p>
    </div>
    <div class="large-4 columns small-space-below medium-space-below">
      <a href="#">
        <div class="table">
          <div class="table-left">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo-europe-source.png" class="featured">
          </div>
          <div class="table-right">
            <h3>Beyond Italy</h3>
            <div class="subhead">Paris, Switzeland, and More!</div>
          </div>
        </div>
      </a>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada mauris dui, at auctor mauris tempor ac. In hac habitasse platea dictumst. Vestibulum sed dolor velit. Donec posuere nisi ut urna tempor gravida. Cras efficitur venenatis feugiat. <a href="#" class="read-more">(read more)</a></p>
    </div>
    <div class="large-4 columns">
      <a href="#">
        <div class="table">
          <div class="table-left">
            <img src="<?php bloginfo('template_directory'); ?>/img/map-thumbnail.jpg" class="featured">
          </div>
          <div class="table-right">
            <h3>Maps</h3>
          </div>
        </div>
      </a>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada mauris dui, at auctor mauris tempor ac. In hac habitasse platea dictumst. Vestibulum sed dolor velit. Donec posuere nisi ut urna tempor gravida. Cras efficitur venenatis feugiat.</p>
    </div>
  </div>
</section>

<footer>
  <div class="row">
    <div class="large-12 columns">
      <nav>
        <?php wp_nav_menu(array( 'container' => '', 'depth' => 1 )) ?>
      </nav>

      <ul class="logo-array footer-array">
        <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo-asta.png"></a></li>
        <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo-bbb.png"></a></li>
        <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo-fb.png"></a></li>
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