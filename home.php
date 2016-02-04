<?php 

/*
This page is actually going to display the default blog section - (the real static home page is front-page.php)
WordPress will only use either home.php or index.php, but I prefear home.php
(even if could be misleading) because I want to leave index.php to display 
"Work In Progress" message to all pages that don't have a template page assigned!

Use only the home.php template file for the blog posts index. 
Do not use a Custom Page Template (such as template-blog.php) for two reasons:

When the static front page feature is configured properly, 
WordPress will not use a Custom Page Template to display the blog 
posts index, even if a Custom Page Template is assigned to the page 
designated as the "Posts page". 

WordPress will only use either home.php or index.php.
When the Custom Page Template is assigned to a static page other than 
the one designated as the "Posts page," the blog posts index loop pagination will not work properly.
*/

get_header(); 

?>

<section class="copy-only-section copy-only-section--skin u-cf">
  <h2 class="u-margin-t-flush  [ page-title ]">WHAT’S ON</h2>

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