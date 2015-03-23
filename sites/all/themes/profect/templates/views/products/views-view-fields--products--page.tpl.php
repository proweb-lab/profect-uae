<div class="small-posts">
  <div class="entry clearfix">
  <div class="entry_image">
     <?php print $fields['field_images']->content;?>
  </div>
  <div class="entry_c">
    <div class="entry_title"><h1><?php print $fields['title']->content;?></h1></div>
    <div class="clear"></div>
    <span class="page-divider"><span></span></span>
    <div class="entry_content">
       <?php print $fields['field_body']->content;?>
    </div>
     <span class="more"><a href="#"><?php echo l(t('More'), 'node/' . $fields['nid']->raw); ?></a></span> 
  </div>
</div>
</div>
