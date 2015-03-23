<div class="cycle-slideshow " data-cycle-fx="fade" data-cycle-timeout="5000" data-cycle-slides="> div"
     data-cycle-prev="#prev"  data-cycle-next="#next">
            <?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
</div>
<span id="prev" class="about-prev"></span>
 <span id="next" class="about-next"></span>