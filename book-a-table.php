<?php

/*Template Name: Book A Table Page*/

get_header();

?>


<?php 
  $telephone           = get_field('telephone_number', 'option');
  $book_a_table_image  = get_field('book_a_table_image'); 
  
?>


  <section class="u-displayTable [ top-section-wrapper ]">
    
    <div class="top-section top-section--skin top-section--bkg top-section--bkg-findUs u-cf " style="background-image: url('<?php echo get_bloginfo('template_directory');?>/images/find-us/find-us-illustration.png');">
      <h2 class="u-margin-t-flush  [ page-title ]"><?php echo get_the_title(); ?></h2>
      <p>
        For same day reservations please call the restaurant on 
        <span class="find-us-phone"><?php echo $telephone; ?></span>
        <a class="find-us-mobile-phone u-inlineBlock" href="tel://<?php echo str_replace(' ', '', $telephone); ?>"><?php echo $telephone; ?></a>
        or email us: <a class="u-textBreak" href="mailto:info@theladyottoline.com?subject=The Lady Ottoline Reservation Enquiry">info@theladyottoline.com</a>
      </p>
      
      
      <?php include 'partials/booking-widget-book-a-table-page.php'; ?>  
      
      
    </div>

    <div class="cover [ img-top-section ]" style="background-image: url('<?php echo $book_a_table_image['sizes']['386x543']; ?>')"></div>
    
  </section>















<?php get_footer(); ?>