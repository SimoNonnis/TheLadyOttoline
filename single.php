<?php

/*Default WP file to display a single post*/

get_header();

?>


<section class="[ amberBorder ] copy-only-section copy-only-section--skin u-cf">
  <h2 class="u-margin-t-flush  [ page-title ]">WHAT’S ON</h2> 

  <!-- SideBar -->
  <aside class="sidebar-section u-cf">
    <?php include 'partials/loops/blog-sidebar.php'; ?>
  </aside>
  <!-- End SideBar --> 


  <!-- Single Article -->    
  <section class="blog-section">

    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>    
        <article class="media-obj">
          <div class="media-obj__img-div">
            <?php the_post_thumbnail('235x235'); ?>
          </div>
          <div class="media-obj__body">
            <h3 class="u-margin-t-flush  [ page-title ] media-obj-body__title"><?php echo get_the_title(); ?></h3>
            <div>
              <?php the_content(); ?>
            </div>

              <!-- Share blog post section -->
              <div>
                <p class="u-textUpperCase">Share:</p>
                <div class="u-noTextDecoration social-links">
                  <a href="http://twitter.com/home/?status=<?php the_title();?> - <?php echo wp_get_shortlink();?>" target="_blank">
                    <i class="[ social-icons ] icon-twitter"></i>
                  </a>
                  <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?> - <?php echo wp_get_shortlink();?>" target="_blank">
                    <i class="[ social-icons ] icon-facebook"></i>
                  </a>
                </div>
              </div>
              <!-- End Share blog post section -->
            
              
              <a href="<?php echo get_permalink(14); ?>" class="btn btn--topSection borderDouble button-dark">Book Now</a>
              <a href="<?php echo get_permalink(8); ?>" class="btn btn--topSection button-dark btn--back-to">Back to what's on</a>
            
          </div>
          
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  
  </section>
  <!-- End Single Article -->


</section>
 







<?php get_footer(); ?>