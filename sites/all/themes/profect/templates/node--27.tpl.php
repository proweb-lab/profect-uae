<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<div class="webform">
  <?php
  $node = node_load(3); // Load webform node
  $submission = (object) array(); // empty object required by webform‏
  echo render(drupal_get_form('webform_client_form_' . 3, $node, $submission));
  ?>
</div>
    <div class="webform-info">
<div class="col_one_third entry_content col_last nobottommargin contact-us">
  <div class="topmargin">
    <div class="product-feature"><span class="icon-map-marker"></span><h3><?php echo t('Our Headquarter');?></h3><?php echo render($content['field_address']); ?></div>
    <div class="product-feature"><span class="icon-phone"></span><h3><?php echo t('Call us');?> </h3><?php echo render($content['field_phone']); ?></div>
    <div class="product-feature"><span class="icon-envelope-alt"></span><h3><?php echo t('Email Addresses');?></h3><?php echo render($content['field_email']); ?></div>
  </div>
</div>
</div>
</article>