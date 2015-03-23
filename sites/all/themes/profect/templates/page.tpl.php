<div id="wrapper" class="clearfix">
  <div id="top-bar">
    <div class="container clearfix">
      <?php if ($page['top_left']): ?>
        <div id="top-menu">
          <?php print render($page['top_left']); ?>
        </div>
      <?php endif; ?>
      
        <div id="top-social">
    <ul>
    <li class="ts-facebook"><a href="#" ><div class="ts-icon"></div><div class="ts-text">Facebook</div></a></li>
    <li class="ts-linkedin"><a href="#" ><div class="ts-icon"></div><div class="ts-text">Linkedin</div></a></li>
    <li class="ts-twitter"><a href="#" ><div class="ts-icon"></div><div class="ts-text">Twitter</div></a></li>
    <li class="ts-mail"><a href="mailto:coworker@abc.com" ><div class="ts-icon"></div><div class="ts-text">profect@profect.com</div></a></li>
    </ul>
            <?php if ($page['top_right']): ?>
          <?php print render($page['top_right']); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
  <header role="banner" id="page-header">
      <div class="container clearfix">
       <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>
      <?php if (!empty($site_name)): ?>
      <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
      </div>
  </header> <!-- /#page-header -->

     <div class="full-width front-slider content-wrap">
         <?php if (drupal_is_front_page()): ?>
        <?php print views_embed_view('front_slider', 'block'); ?>
        <?php endif; ?>
        
     </div>
  <div class="container front-text content-wrap">
         <?php if (drupal_is_front_page()): ?>
        <?php print views_embed_view('front_text', 'block'); ?>
        <?php endif; ?>
        
   </div>
  <?php
  //if(!($front_page)){
    print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <div id="page-title">
          <div class="container clearfix">
            <h1><?php print $title; ?></h1>
            <?php if (!empty($search_block)): ?>
                 <div id="top-search">
            <?php  print $search_block; ?>
                 </div>
            <?php endif; ?>
          </div>
        </div>
        
  <?php endif;?>
<div class="main-container container">
  <div class="row">
    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
       
    
      <a id="main-content"></a>
     
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>
<footer class="footer">
   <div class="footer-widgets-wrap clearfix">
   <?php if ($page['footer_first']): ?>
            <div class="col_one_fourth">
              <?php print render($page['footer_first']); ?>
            </div>
          <?php endif; ?>
          <?php if ($page['footer_second']): ?>
            <div class="col_one_fourth">
              <?php print render($page['footer_second']); ?>
            </div>
          <?php endif; ?>
          <?php if ($page['footer_third']): ?>
            <div class="col_one_fourth">
              <?php print render($page['footer_third']); ?>
            </div>
          <?php endif; ?>
          <?php if ($page['footer_fourth']): ?>
            <div class="col_one_fourth">
              <?php print render($page['footer_fourth']); ?>
            </div>
          <?php endif; ?>
        </div>
  <div class="clear"></div>
  <?php if ($page['footer']): ?>
    <div id="copyrights">
      <div class="container clearfix">
        <div class="col_half">
          <?php echo t('Copyrights © 2015 &amp; All Rights Reserved by Profect'); ?>
        </div>
        <div class="col_half col_last tright">
             <?php print render($page['footer']); ?>
        </div>
      </div>
    </div>
   <?php endif; ?>
</footer>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-55371821-1', 'auto');
    ga('send', 'pageview');

</script>