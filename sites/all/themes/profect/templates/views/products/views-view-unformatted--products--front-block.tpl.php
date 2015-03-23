<div class="front products-slider">
<div class="col_full">
  <h3><span><?php echo t('Our Products');?></span> </h3>
  <div id="portfolio-product" class="scroll-portfolio clearfix">
    <?php foreach ($rows as $id => $row): ?>
      <?php print $row; ?>
    <?php endforeach; ?>
  </div>
 
</div>
</div>
<div class="goto-products">
<span><a href="products"><?php echo t('Go To All Products'); ?></a></span>
</div>
<div class="dotted-divider"></div>
