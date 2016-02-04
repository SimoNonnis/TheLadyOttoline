

<header  class="u-cf max-width u-margin-lr-auto u-position-rel [ header-wrapper ]" role="banner">
	
	<!-- Logo -->
	<div class="[ logo-div ]" itemscope itemtype="http://schema.org/Organization">
		<h1 class="u-margin-t-flush">
			<a href="<?php echo get_home_url(); ?>" class="u-inlineBlock" itemprop="url">
				<img itemprop="logo" class="logo-svg" src="<?php echo get_bloginfo('template_directory');?>/images/logo.svg" alt="Newman Street Tavern">	
			</a>
		</h1>
	</div>
	<!-- End Logo -->

	<div class="u-cf nav-btnBookOnLine-div">
		<!-- Navigation -->
		<nav class="main-nav" role="navigation">

			<?php zero_main_nav(); ?>

		</nav>
		
		<!-- Book a Table Button -->
		<button title="Book Now" type="button" class="button button-gold [ buttonBookingModal ] borderDouble borderDouble-gold bookingModal__open u-textUpperCase">Book a table</button>
	</div>


	<!-- Booking Widget Modal -->
	<div class="[ bookingModal ]" id="js-bookingModal">
	  <div class="bookingModalContainer-outer">
	    <div class="bookingModalContainer">
				
				<?php get_template_part('partials/booking-widget-big-frame'); ?>

			</div>
		</div>
	</div>
	<!-- End Booking Widget Modal -->





	<!-- Mobile Navigation toggle -->
	<div class="nav-toggle-div [ u-textLeft ]">
		<button type="button" class="button mobileNavButton mobileNavButton__open">
			<i class="nav-toggle__i [ u-textNormal ] [ icon-menu ]"></i>
		</button>
	</div>
	<!-- End Mobile Navigation toggle -->

	<!-- Mobile Nav Modal -->
	<div class="[ mobileNavModal ]" id="js-mobileNavModal">
	  <div class="mobileNavModalContainer-outer">
	    <div class="mobileNavModalContainer [ mobileNav ]">
	    
	      <!-- Close Icon -->
	      <button title="Close (ESC)" type="button" class="button mobileNavButton mobileNavButton__close"><i class="icon-cross"></i></button>
	      <!-- End Close Icon -->
	      
	      <nav>
	        
					<?php zero_main_nav(); ?>
	        
	      </nav>
	      
	      
	    </div>
	  </div>
	</div>
	<!-- End Mobile Nav Modal -->

</header>