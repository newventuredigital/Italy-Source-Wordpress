<aside class="medium-4 columns sidebar">
  <div class="map-bg">
    <h2 class="green">Applause!</h2>
      <div class="sidebar-inner-wrap">
        <div class="p">
          <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Applause 1')) : else : ?>
          <?php endif; ?>
        </div>
        
        <div class="p">
          <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Applause 2')) : else : ?>
          <?php endif; ?>
        </div>
        <img src="<?php bloginfo('template_directory'); ?>/img/hr.png" class="hr">
      </div>
    <h2 class="red">Travel Tip of the Day</h2>
      <div class="sidebar-inner-wrap">
      <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Travel Tip of the Day')) : else : ?>
      <?php endif; ?>
      </div>
    <h2 class="green">Other Good Stuff</h2>
      <div class="sidebar-inner-wrap">
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Other Good Stuff')) : else : ?>
        <?php endif; ?>
        <img src="<?php bloginfo('template_directory'); ?>/img/hr.png" class="hr">
        
        <div class="center travel-responder">
          <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Bottom of Sidebar')) : else : ?>
          <?php endif; ?>
        </div> 
      </div>
  </div>
</aside>