<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
   
<div class="col_three_fifth">
        <div class="flexslider">
            <div class="about-us-slide">
               <?php print views_embed_view('front_slider', 'about_us_slider'); ?>
            </div>
        </div>
    </div>
<div class="col_two_fifth col_last">             
    <?php print views_embed_view('about_us', 'about_us_block'); ?>
</div>
</article>