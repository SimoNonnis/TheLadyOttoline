<?php

/*Template Name: Menus Page*/

get_header();

?>


<?php 
  
  $menus_top_section_copy         = get_field('menus_top_section_copy');
  $menus_top_section_link         = get_field('menus_top_section_link');
  $menus_top_section_link_title   = get_field('menus_top_section_link_title');
  $menus_top_section_image        = get_field('menus_top_section_image'); 

  $seasonal_menus_title           = get_field('seasonal_menus_title');
  $seasonal_menus_copy            = get_field('seasonal_menus_copy');
  $seasonal_menus_image           = get_field('seasonal_menus_image');

  $ingr_and_suppliers_image       = get_field('ingr_and_suppliers_image');
  $ingr_and_suppliers_copy        = get_field('ingr_and_suppliers_copy');

  
?>



  <!-- Top Section -->
  <section class="u-displayTable [ top-section-wrapper ]">
    
    <div class="top-section top-section--skin top-section--bkg ">
      <h2 class="u-margin-t-flush  [ page-title ]"><?php echo get_the_title(); ?></h2>
      <?php echo $menus_top_section_copy; ?> 
      
      
      <?php if( $menus_top_section_link && $menus_top_section_link_title ): ?>
        <a href="<?php echo $menus_top_section_link; ?>" class="btn btn--topSection borderDouble button-dark"><?php echo $menus_top_section_link_title; ?></a>
      <?php endif; ?>
    </div>

    <div class="cover [ img-top-section ]" style="background-image: url('<?php echo $menus_top_section_image['sizes']['386x397']; ?>')"></div>
    
  </section>
  <!-- End Top Section -->


  



  <!-- Menus Section -->
  <?php if( have_rows('menus_pdfs_grid') ): ?>
    <?php while( have_rows('menus_pdfs_grid') ): the_row(); 
      
      $menus_pdf_image  = get_sub_field('menus_pdf_image');
      $menus_pdf_title  = get_sub_field('menus_pdf_title');
      $menus_pdf_file   = get_sub_field('menus_pdf_file');
      
    ?>
  
    
    <div class="[ grid-element ] magicBox magicBox--fancy-zoom">
      <div class="cover fancy-zoom" style="background-image: url('<?php echo $menus_pdf_image['sizes']['386x340']; ?>')"></div>
      
      <div class="magicBox-overlay magicBox-overlay__black center-parent u-textCenter">
        <div class="lotOfCopy center-child">
           <h3 class="magicBox__title"><?php echo $menus_pdf_title; ?></h3>
           <?php if( wp_is_mobile() ): ?><button class="button btn btn--pdf borderDouble button-light">view pdf</button><?php endif; ?>
        </div>
      </div>

      <a href="<?php echo $menus_pdf_file; ?>" target="_blank"></a>
    </div>
    

    <?php endwhile; ?>
  <?php endif; ?>
  <!-- End Menus Section -->

  



  







  <!-- Rect1 -->
  <div class="[ grid-element--rect magicBox--rectCopy ] magicBox magicBox--light ">
    <div class="rect-copy-wrapper">
      <h3 class="u-margin-t-flush  [ page-title ]"><?php echo $seasonal_menus_title; ?></h3>
        <?php echo $seasonal_menus_copy; ?>    
    </div>
  </div> 

  <div class="[ grid-element ] magicBox lap-mob-hidden">
    <div class="cover" style="background-image: url('<?php echo $seasonal_menus_image['sizes']['386x340']; ?>')"></div>
  </div> 

  


  



  <div class="[ grid-element ] magicBox lap-mob-hidden">
    <div class="cover" style="background-image: url('<?php echo $ingr_and_suppliers_image['sizes']['386x340']; ?>')"></div>
  </div>

  <!-- Rect2 -->
  <div class="[ grid-element--rect magicBox--rectCopy ] magicBox magicBox--dark1">
    <div class="rect-copy-wrapper">
      <h3 class="u-margin-t-flush  [ page-title ]">INGREDIENTS AND SUPPLIERS</h3>
        <?php echo $ingr_and_suppliers_copy; ?>
    </div>
    
  </div> 
   










<?php get_footer(); ?>