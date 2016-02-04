<?php

/*Template Name: About Us Page*/ 

get_header();

?>


<?php 

  $about_top_section_copy         = get_field('about_top_section_copy');
  $about_top_section_image        = get_field('about_top_section_image');

  $about_mid_section_sq_link      = get_field('about_mid_section_sq_link');
  $about_mid_section_sq_image     = get_field('about_mid_section_sq_image');
  $about_mid_section_sq_title     = get_field('about_mid_section_sq_title');
  $about_mid_section_rect_image   = get_field('about_mid_section_rect_image');  
  
?>


  <section class="u-displayTable [ top-section-wrapper ]">
    
    <div class="top-section top-section--skin top-section--bkg " >
      <h2 class="u-margin-t-flush  [ page-title ]"><?php echo get_the_title(); ?></h2>
        
        <?php echo $about_top_section_copy; ?>

      </div>

    <div class="cover [ img-top-section ]" style="background-image: url('<?php echo $about_top_section_image['sizes']['386x397']; ?>')"></div>
    
  </section>


  



  
  <div class="[ grid-element ] magicBox magicBox--fancy-zoom">
    <div class="cover <?php if( $about_mid_section_sq_title && $about_mid_section_sq_link ): ?>fancy-zoom<?php endif; ?>" style="background-image: url('<?php echo $about_mid_section_sq_image['sizes']['386x340']; ?>')"></div>
    
    <?php if( $about_mid_section_sq_title && $about_mid_section_sq_link ): ?>
    <div class="magicBox-overlay magicBox-overlay__black center-parent u-textCenter">
      <div class="lotOfCopy center-child">
         <h3 class="magicBox__title"><?php echo $about_mid_section_sq_title; ?></h3>
      </div>
    </div>
    <?php endif; ?>

    <?php if( $about_mid_section_sq_title && $about_mid_section_sq_link ): ?>
      <a href="<?php echo $about_mid_section_sq_link; ?>" ></a>
    <?php endif; ?>

  </div>
  

  <div class="[ grid-element--rect ] magicBox lap-mob-hidden">
    <div class="cover" style="background-image: url('<?php echo $about_mid_section_rect_image['sizes']['785x340']; ?>')"></div>
  </div>

  



  <?php if( have_rows('about_bottom_section') ): ?>
    <?php while( have_rows('about_bottom_section') ): the_row(); 
      
      $about_bot_section_link       = get_sub_field('about_bot_section_link');
      $about_bot_section_image      = get_sub_field('about_bot_section_image');
      $about_bot_section_title      = get_sub_field('about_bot_section_title');
      
    ?>

      
    <div class="[ grid-element ] magicBox magicBox--fancy-zoom">
      <div class="cover <?php if( $about_bot_section_title && $about_bot_section_link ): ?>fancy-zoom<?php endif; ?>" style="background-image: url('<?php echo $about_bot_section_image['sizes']['386x340']; ?>')"></div>
      
      <?php if( $about_bot_section_title && $about_bot_section_link ): ?>
      <div class="magicBox-overlay magicBox-overlay__black center-parent u-textCenter">
        <div class="lotOfCopy center-child">
           <h3 class="magicBox__title"><?php echo $about_bot_section_title; ?></h3>
        </div>
      </div>
      <?php endif; ?>

      <?php if( $about_bot_section_title && $about_bot_section_link ): ?>
        <a href="<?php echo $about_bot_section_link; ?>" ></a>
      <?php endif; ?>

    </div>
     


    
    <?php endwhile; ?>
  <?php endif; ?>










  <div class="[ grid-element ] magicBox" >
    <div class="magicBox--dark1 center-parent aboutBox-bkg" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/images/about/about-illustration2.png');">
      <div class="lotOfCopy center-child u-textCenter">
          <h3 class="magicBox__title magicBox__title--no-shadow aboutBox__title">AFFINITY GROUP</h3>
          <p class="magicBox__copy aboutBox__copy">We own and operate 4 pubs and dining rooms across London, delivering food with integrity, drink with a twist and service with a smile.</p>
      </div>
    </div>
  </div> 







<?php get_footer(); ?>