<?php

/*Template Name: Home Page*/  

get_header();

?>


<?php 
  
  $images             = get_field('slider');

  $telephone          = get_field('telephone_number', 'option');

  $address1           = get_field('address_line1', 'option');
  $address2           = get_field('address_line2', 'option');
  $address3           = get_field('address_line3', 'option');

  $booking_img        = get_field('booking_img');
 
?>








 
  <div class="hero-container u-cl">
    
    <div class="slider-container u-cl">
      
      <?php if( $images ): ?>
      <div class="flexslider">
        <ul class="slides">
          <?php foreach( $images as $image ): ?>
          <li>
            <img src="<?php echo $image['sizes']['775x600']; ?>" alt="<?php echo $image['alt']; ?>"/> 
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endif; ?>
     
    </div>
    
    <div class="slider-aside u-cl ">
      <h2 class="u-margin-t-flush u-textUpperCase [ slider-aside__title ]">Welcome to <span class="u-inlineBlock">The Lady Ottoline</span></h2>
      <div class="slider-aside__child"><img src="<?php echo get_bloginfo('template_directory');?>/images/slider-aside-img.gif" alt="Illustration"></div>
      <div class="slider-aside__child">
        
        <?php get_template_part('partials/social-links'); ?>


        <!-- Mobile Telephone Number -->
        <a class="tel-active u-inlineBlock" href="tel://<?php echo str_replace(' ', '', $telephone); ?>"><?php echo $telephone; ?></a>
        
        <p class="tel-read-only [ u-margin-t-flush u-inlineBlock ]"><?php echo $telephone; ?></p>
        <p class="contact-details-address [ u-margin-t-flush u-textCapitalize ]">
          <a href="https://goo.gl/maps/voykb" target="_blank" alt="View on Google Maps">
            <?php echo $address1; ?><br>
            <?php echo $address2; ?><br>
            <?php echo $address3; ?>
          </a>
        </p>
      </div>
    </div>

  </div><!--End hero-container-->

















  
  
  
  <?php if( have_rows('home_page_squares') ): ?>
    <?php while( have_rows('home_page_squares') ): the_row(); 
      
      $home_sq_link           = get_sub_field('home_sq_link');
      $home_sq_image          = get_sub_field('home_sq_image');
      $home_sq_title          = get_sub_field('home_sq_title');
      
      $home_sq_mobile_hidden  = get_sub_field('home_sq_mobile_hidden');

    ?>

      
      <div class="[ grid-element ] magicBox magicBox--fancy-zoom <?php if( $home_sq_mobile_hidden ): ?>mob-hidden<?php endif; ?>">
        <div class="cover <?php if( $home_sq_title && $home_sq_link ): ?>fancy-zoom<?php endif; ?>" style="background-image: url('<?php echo $home_sq_image['sizes']['386x340']; ?>')"></div>
        
        <?php if( $home_sq_title && $home_sq_link ): ?>
        <div class="magicBox-overlay magicBox-overlay__black center-parent u-textCenter">
          <div class="lotOfCopy center-child">
             <h3 class="magicBox__title"><?php echo $home_sq_title; ?></h3>
          </div>
        </div>
        <?php endif; ?>

        <?php if( $home_sq_title && $home_sq_link ): ?>
          <a href="<?php echo $home_sq_link; ?>" ></a>
        <?php endif; ?>

      </div>
      


    
    <?php endwhile; ?>
  <?php endif; ?>



  

  <!--Blog Post Style-->
  <?php 
  
    $home_post_title   = get_field('home_post_title'); 
    $home_post_copy    = get_field('home_post_copy');
    $home_post_link    = get_field('home_post_link');
    $home_post_img     = get_field('home_post_img');

  ?>  
  <div class="[ grid-element ] magicBox lastBlogPostBox">
    <div class="magicBox-overlay magicBox--light lastBlogPost center-parent ">
      <div class="lotOfCopy lotOfCopy--homeBlogPost center-child u-textCenter">
        <h3 class="magicBox__title magicBox__title--no-shadow u-textTruncate">
          <a href="<?php echo $home_post_link; ?>" class="lastBlogPost__title"><?php echo $home_post_title; ?></a>
        </h3>
        <p class="magicBox__copy"><?php echo $home_post_copy; ?></p>
        <a href="<?php echo $home_post_link; ?>" class="btn borderDouble button-dark home-page-read-more">Read More</a>
      </div>
    </div>
  </div>
    
  <div class="[ grid-element ] magicBox lastBlogPostBoxImage lap-mob-hidden">
    <div class="cover" style="background-image: url('<?php echo $home_post_img['sizes']['386x340']; ?>')"></div>
  </div>
  <!--End Blog Post Style-->





  <!--Booking Widget-->
  <div class="[ grid-element ] magicBox bookingWidgetBoxImage mob-hidden">
    <div class="cover" style="background-image: url('<?php echo $booking_img['sizes']['386x340']; ?>')"></div>
  </div>


  <div class="[ grid-element ] magicBox magicBox--light bookingWidgetBox u-overflowVisible ">
    <?php get_template_part('partials/booking-widget-small-frame'); ?>
  </div>
  <!--End Booking Widget-->

  


  

<?php get_footer(); ?>