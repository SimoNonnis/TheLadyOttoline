<?php 

/* This page is going to display blog posts for single categories */

get_header(); 

?>

<section class="[ amberBorder ] copy-only-section copy-only-section--skin u-cf">
  <h2 class="u-margin-t-flush  [ page-title ]">Category: <?php single_cat_title(); ?></h2>

  <!-- SideBar -->
  <aside class="sidebar-section u-cf">
    <?php include 'partials/loops/blog-sidebar.php'; ?>
  </aside>
  <!-- End SideBar --> 


  <!-- Blog Articles -->  
  <section class="blog-section">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>    
    <article class="media-obj">
      <div class="media-obj__img-div">
        <?php the_post_thumbnail('235x235'); ?>
      </div>
      <div class="media-obj__body">
        <h3 class="u-margin-t-flush  [ page-title ] media-obj-body__title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        <p>
          <?php echo get_excerpt(300); ?>
        </p>
        <a href="<?php the_permalink() ?>" class="btn btn--topSection borderDouble button-dark">Read More</a> 
      </div>
      
    </article>
    <?php endwhile; ?>

    <?php else : ?>
    <article class="media-obj">
      <div class="media-obj__body">
        <h3 class="u-margin-t-flush  [ page-title ] media-obj-body__title">No Blog Posts Yet!</h3>
      </div>
    </article>
    <?php endif; ?>

  </section>
  <!-- End Blog Articles --> 



 
</section>
 







<?php get_footer(); ?>