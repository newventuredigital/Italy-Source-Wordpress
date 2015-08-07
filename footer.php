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