
  
<!-- Recurring Events -->
<div class="sidebar-events sidebar--skin">

  <h3 class="u-margin-t-flush sidebar__title u-textUpperCase">Recurring Events</h3>
  <ul class="sidebar-events__ul u-clean-list [ js-sidebar-events__ul ]">
    
    <?php query_posts('cat=2&showposts=4'); ?>
      <?php while (have_posts()) : the_post(); ?>
        <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
      <?php endwhile; ?>
    <?php wp_reset_query(); ?>
    
  </ul>
      
  
</div>
<!-- End Recurring Events -->








<!-- Blog Categories -->
<div class="sidebar-categories sidebar--skin">

  <h3 class="u-margin-t-flush sidebar__title u-textUpperCase">Categories</h3>
    <ul class="sidebar-categories__ul u-clean-list [ js-sidebar-categories__ul ]">
      
      <?php wp_list_categories('orderby=ID&hide_empty=0&depth=1&title_li='); ?>

    </ul>
</div>
<!-- End Blog Categories -->



















