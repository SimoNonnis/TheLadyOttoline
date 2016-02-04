<?php

  if($post->post_parent):
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&depth=1&echo=0&sort_column=menu_order&ID");
  else:
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&depth=1&echo=0&sort_column=menu_order&ID");
  endif;

?>



<?php if ($children): ?>

<ul class="gallery-cat-links-ul u-clean-list u-cf">
  <?php echo $children; ?>
</ul>

<?php endif; ?>