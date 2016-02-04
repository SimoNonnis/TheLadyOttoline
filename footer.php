	

	

</div><!-- End wrapper -->


<footer role="contentinfo" class="footer [ u-cf u-textCenter ]">
    
    <!-- Footer Navigation Section -->
    <div class="footer-nav [ u-cf ]">
      
      <?php get_template_part('partials/social-links'); ?>
      <button type="button" class="button button-gold borderDouble [ footer-nav__e-newsletter ] u-textUpperCase" id="newsLetterModal-Open">mailing list</button>
      <?php zero_footer_links(); ?>

    </div>
    <!-- End Footer Navigation Section -->
    
    
    <!-- Locations Section -->
    <div class="footer-locations-section">
      
      <div class="u-noTextDecoration u-textCenter">
        <a href="http://48newmanstreet.co.uk/" class="location-logo-link u-inlineBlock" target="_blank">
          <img src="<?php echo get_bloginfo('template_directory');?>/images/newman-logo.svg" alt="48 Newman Street Logo">
        </a>
        <a href="<?php echo get_home_url(); ?>" class="location-logo-link u-inlineBlock" >
          <img src="<?php echo get_bloginfo('template_directory');?>/images/lady-ottoline-logo.svg" alt="The Lady Ottoline Logo">
        </a>
        <a href="http://www.princessvictoria.co.uk/" class="location-logo-link u-inlineBlock" target="_blank">
          <img src="<?php echo get_bloginfo('template_directory');?>/images/princess-vic-logo.svg" alt="Princess Victoria Logo">
        </a>
        <a href="http://www.thehenryroot.com/" class="location-logo-link u-inlineBlock" target="_blank">
          <img src="<?php echo get_bloginfo('template_directory');?>/images/henry-root-logo.png" alt="The Henry Root Logo">
        </a>
      </div>
      
      <p class="ignite-credit">
      	<span class="[ u-textUpperCase ]">The Lady Ottoline</span> 
      	<span class="[ u-inlineBlock ]">All rights reserved &copy; <?php echo (date("Y")); ?></span> 
        <span class="[ u-inlineBlock u-textCapitalize ]">Website by <a class="[ u-inlineBlock u-textCapitalize u-noTextDecoration ]" href="http://www.ignitehospitality.com/" target="_blank">Ignite Hospitality Marketing</a></span>
      </p>
  	
  	</div>
    <!-- End Locations Section -->


    <?php get_template_part('partials/newsletter-form'); ?>

</footer>


<!-- Javascript -->
<?php wp_footer(); ?>



</body>
</html>