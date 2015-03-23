<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<div id="portfolio-single-wrap">
    <div id="slider">
        <?php echo render($content['field_image']); ?>
    </div>
    <div id="portfolio-details-wrap">
        <div class="port-desc clearfix">
            <h3><?php echo t('Product Description');?></h3>
            <?php echo render($content['field_body']); ?>
        </div>
        <span class="page-divider"><span></span></span>
    </div>
</div>
</article>