<?php

  $twitter    = get_field('twitter_link', 'option');
  $facebook   = get_field('facebook_link', 'option');
  $instagram  = get_field('instagram_link', 'option');
  $youtube    = get_field('youtube_link', 'option');
  $googleplus = get_field('googleplus_link', 'option');

?>




<div class="u-noTextDecoration social-links">
  <a href="<?php echo $twitter;    ?>" target="_blank"><i class="[ social-icons ] icon-twitter"></i></a>
  <a href="<?php echo $facebook;   ?>" target="_blank"><i class="[ social-icons ] icon-facebook"></i></a>
  <a href="<?php echo $instagram;  ?>" target="_blank"><i class="[ social-icons ] icon-Instagram"></i></a>
  <!-- <a href="<?php echo $youtube;    ?>" target="_blank"><i class="[ social-icons ] icon-youtube"></i></a> -->
  <a href="<?php echo $googleplus; ?>" target="_blank"><i class="[ social-icons ] icon-googleplus"></i></a>
</div>