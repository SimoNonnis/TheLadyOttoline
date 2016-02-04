<?php

/*Template Name: Gallery Page*/

get_header();

?>


<?php 

  $gallery_images = get_field('gallery_images');  
  
?>


  <section class="u-textCenter gallery-navigation-div " >
    <h2 class="u-margin-t-flush  [ page-title ]"><?php echo get_the_title(); ?></h2>
    <?php include 'partials/loops/children-pages-loop.php'; ?>
  </section>

  <div class="gallery-div u-textCenter u-cf" id="js-gallery">
    
    <?php if( $gallery_images ): ?>

      <?php foreach( $gallery_images as $image ): ?>
      <a href="<?php echo $image['url']; ?>">
        <img src="<?php echo $image['sizes']['386x340']; ?>" alt="<?php echo $image['alt']; ?>">
      </a>
      <?php endforeach; ?>

    <?php else: ?>
      <p>No images at the moment for this section!</p>
    <?php endif; ?>

  </div>




<?php get_footer(); ?>