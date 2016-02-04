<?php
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }
 
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
    }
?>




<!-- Event Enquiry Modal PopUp -->
<div class="eventEnquiryModal" id="js-eventEnquiryModal">
	<div class="eventEnquiryContainer-outer">
		<div class="eventEnquiryContainer ">

			<button title="Close (ESC)" type="button" class="eventEnquiry__close"><i class="icon-cross"></i></button>

			<h2 class="eventEnquiry__title [ u-textUpperCase u-margin-t-flush ]">Book event</h2>








			<?php echo do_shortcode( '[contact-form-7 id="145" title="Event Enquiry Form"]' ); ?>


			<p>* Required Fields</p>







		</div>
	</div>
</div>
<!-- End Event Enquiry Modal PopUp -->
