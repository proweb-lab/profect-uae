<div class="cycle-slideshow " data-cycle-fx="fade" data-cycle-timeout="5000" data-cycle-slides="> div"
     data-cycle-prev="#prev"  data-cycle-next="#next" data-cycle-pager="#front-pager">
            <?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
</div>
 <span id="prev"></span>
 <span id="next"></span>
<div class="cycle-pager slideshow" id="front-pager"></div>
