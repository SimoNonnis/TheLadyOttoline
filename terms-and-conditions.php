<?php

/*Template Name: T&Cs Page*/

get_header();

?>



<section class=" copy-only-section copy-only-section--skin">
  <h2 class="u-margin-t-flush  [ page-title ]"><?php echo get_the_title(); ?></h2> 

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
  <div>
    
    <?php the_content(); ?>

  </div>
  <?php endwhile; ?>
  <?php endif; ?>
</section>
 


<?php get_footer(); ?>