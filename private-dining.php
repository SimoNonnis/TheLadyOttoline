<?php

/*Template Name: Private Dining Page*/

get_header();

?>


<?php   

  $menus_top_section_copy           = get_field('private_dining_top_section_copy');
  $menus_top_section_image          = get_field('private_dining_top_section_image'); 

  $private_dining_rect_image        = get_field('private_dining_rect_image');

  $private_dining_capacity_copy     = get_field('private_dining_capacity_copy');
  $private_dining_capacity_spec1    = get_field('private_dining_capacity_spec1');
  $private_dining_capacity_spec2    = get_field('private_dining_capacity_spec2');
  $private_dining_capacity_spec3    = get_field('private_dining_capacity_spec3');


  $private_dining_bot_square_link   = get_field('private_dining_bot_square_link'); 
  $private_dining_bot_square_img    = get_field('private_dining_bot_square_img'); 
  $private_dining_bot_square_title  = get_field('private_dining_bot_square_title'); 
  
?>



  <section class="u-displayTable [ top-section-wrapper ]">
    
    <div class="top-section top-section--skin top-section--bkg ">
      <h2 class="u-margin-t-flush  [ page-title ]"><?php echo get_the_title(); ?></h2>
      <?php echo $menus_top_section_copy; ?>

      <a href="mailto:info@theladyottoline.com?subject=The Lady Ottoline Private Dining Enquiry" class="btn btn--topSection borderDouble button-dark">Email us</a>

      
    </div>

    <div class="cover [ img-top-section ]" style="background-image: url('<?php echo $menus_top_section_image['sizes']['386x397']; ?>')"></div>
    
  </section>

  
  <div class="[ grid-element ] magicBox" id="eventEnquiry-Open">
    <div class="magicBox--dark1 center-parent aboutBox-bkg" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/images/private-dining/private-dining-illustration2.png');">
      <div class="lotOfCopy center-child u-textCenter">
        <h3 class="magicBox__title magicBox__title--no-shadow">SEND US AN ENQUIRY</h3>
      </div>
    </div>
  </div>
  


  
  <div class="[ grid-element ] magicBox magicBox--fancy-zoom desktop-hidden">
    <div class="cover <?php if( $private_dining_bot_square_title && $private_dining_bot_square_link ): ?>fancy-zoom<?php endif; ?>" style="background-image: url('<?php echo $private_dining_bot_square_img['sizes']['386x340']; ?>')"></div>
    
    <?php if( $private_dining_bot_square_title && $private_dining_bot_square_link ): ?>
    <div class="magicBox-overlay magicBox-overlay__black center-parent u-textCenter">
      <div class="lotOfCopy center-child">
         <h3 class="magicBox__title"><?php echo $private_dining_bot_square_title; ?></h3>
      </div>
    </div>
    <?php endif; ?>

    <?php if( $private_dining_bot_square_title && $private_dining_bot_square_link ): ?>
      <a href="<?php echo $private_dining_bot_square_link; ?>" class="desktop-hidden"></a>
    <?php endif; ?>
  </div>
  



  <div class="[ grid-element--rect ] magicBox lap-mob-hidden">
    <div class="cover" style="background-image: url('<?php echo $private_dining_rect_image['sizes']['785x340']; ?>')"></div>
  </div>


  <!-- Rect1 -->
  <div class="[ grid-element--rect magicBox--rectCopy1 ] magicBox magicBox--light ">
    <div class="rect-copy-wrapper u-cf">
      <h3 class="u-margin-t-flush  [ page-title ]">CAPACITY &amp; ROOM SPECS</h3>
      <p class="column column-left"><?php echo $private_dining_capacity_copy; ?></p>

      <p class="column column-right">
        <strong>The Morrell Room:</strong> <?php echo $private_dining_capacity_spec1; ?> <br>
        <strong>The Dining Room:</strong> <?php echo $private_dining_capacity_spec2; ?> <br>
        <strong>Top Floor:</strong> <?php echo $private_dining_capacity_spec3; ?> <br>
        <strong>The Bar:</strong> 35 seated; 60 standing <br>
        <strong>Whole venue:</strong> 200 standing
      </p>
        
    </div>
  </div> 




  
  <div class="[ grid-element ] magicBox magicBox--fancy-zoom lap-mob-hidden">
    <div class="cover <?php if( $private_dining_bot_square_title && $private_dining_bot_square_link ): ?>fancy-zoom<?php endif; ?>" style="background-image: url('<?php echo $private_dining_bot_square_img['sizes']['386x340']; ?>')"></div>
    
    <?php if( $private_dining_bot_square_title && $private_dining_bot_square_link ): ?>
    <div class="magicBox-overlay magicBox-overlay__black center-parent u-textCenter">
      <div class="lotOfCopy center-child">
         <h3 class="magicBox__title"><?php echo $private_dining_bot_square_title; ?></h3>
      </div>
    </div>
    <?php endif; ?>

    <?php if( $private_dining_bot_square_title && $private_dining_bot_square_link ): ?>
      <a href="<?php echo $private_dining_bot_square_link; ?>" target="_blank" class="lap-mob-hidden"></a>
    <?php endif; ?>
  </div>
  










  <!-- Modal with Event Enquiry Form -->
    <?php include 'partials/event-enquiry-form.php'; ?>
  <!-- End Modal with Event Enquiry Form -->









<?php get_footer(); ?>