(function($) {

	"use strict";



	

	// Set isActive Class to Menu Navigation Items
	//var url = window.location.pathname,
			//newUrl = url.split('?')[0]; // get rid of parameters

	//console.log('The url: ' + url);
	//console.log('The url without parameters: ' + newUrl);

	//newUrl = newUrl.slice(1); // remove trailing slash
	//console.log('The url without trailing slash: ' + newUrl);
	
	
	//newUrl = newUrl.split('/').slice(-1).pop(); // get rid of folder tree
	//console.log('The url without the folder tree: ' + newUrl);

	
	//$('.main-nav__ul a[href="' + newUrl + '"]').addClass('isActive');
  //End











  //Close Mobile Nav Modal
  function closeMobileNavModal() {
    $('#js-mobileNavModal').removeClass('is-open-mobileNavModal');
		$('html').removeClass('overFlowHidden');
  }
  
  //Open Mobile Nav Modal
  function openMobileNavModal() {
    $('#js-mobileNavModal').addClass('is-open-mobileNavModal');
    $('html').addClass('overFlowHidden');
  }

  
    
    $('.mobileNavButton__open').on('click touch', openMobileNavModal);
    $('.mobileNavButton__close').on('click touch', closeMobileNavModal);

    //Close on ESC key
    $(document).on('keyup', function (e) {
    if(e.keyCode === 27) { closeMobileNavModal(); }
  });
  //End




  


  //Adding gtm-elementId--bookEvent to Contact Form 7 form submit button
    $('.wpcf7-submit').attr('id', 'gtm-elementId--bookEvent'); 
  //End





  



  //Toggle Booking Modal
  function bookingModal() {
    $('#js-bookingModal').toggleClass('is-open-js-bookingModal');
    $('html').toggleClass('bookingModalOverFlowHidden');
  }

	$('.bookingModal__open').on('click touch', bookingModal);
  
  
  
   $("#booking-widget-big-frame #OT_submitWrap").append('<button class="button borderDouble button-dark [ btn--new-submit ] " id="gtm-elementId--dropdown">Book A Table</button>');
  
  
  
  
  
  $("input#startDate").addClass('datepicker');
  $("#OT_searchWrapper .imgCal").css("visibility", "hidden");


  // $( "#booking-widget-big-frame #ism" ).submit(function(e) {
  // 	e.preventDefault();
  	
  //   var $date = $('#startDate').val();
  // 	alert('Test Big Booking Engine ' + $date);
  // });
  
  
  //Booking Widget Datepicker
  $('.datepicker').pickadate({
    format: 'dd/mm/yyyy',
    formatSubmit: 'dd/mm/yyyy',
    hiddenName: true,
    close: '',
    weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
    showMonthsShort: true
  });
	//End
  
  


  


  



  





  //News Letter Modal Form
  $('#newsLetterModal-Open').on('click touch', function(e){
    e.preventDefault();
    
    
    $('html').addClass('newsletterModalOverFlowHidden');
    $('#js-newsLetterModal').addClass('js-newsLetterModal-isVisible');
  });

  // Close function
  function closeNewsLetter() {
    $('#js-newsLetterModal').removeClass('js-newsLetterModal-isVisible');
    $('html').removeClass('newsletterModalOverFlowHidden');
  }

  $('.newsLetter__close').on('click touch', closeNewsLetter);

  // Close on ESC key
  $(document).on('keyup' , function(e) {
    if(e.keyCode === 27) { closeNewsLetter(); }
  });
  //End






  //Close Event Enquiry Form
  function closeEventEnquiryModal() {
    $('#js-eventEnquiryModal').removeClass('js-eventEnquiryModal-isVisible');
    $('html').removeClass('eventEnquiryModalOverFlowHidden');
  }
  
  //Open Event Enquiry Form
  function openEventEnquiryModal() {
    $('#js-eventEnquiryModal').addClass('js-eventEnquiryModal-isVisible');
    $('html').addClass('eventEnquiryModalOverFlowHidden');
  }

  
    
  $('#eventEnquiry-Open').on('click touch', openEventEnquiryModal);
  $('.eventEnquiry__close').on('click touch', closeEventEnquiryModal);

    //Close on ESC key
    $(document).on('keyup', function (e) {
    if(e.keyCode === 27) { closeEventEnquiryModal(); }
  });
  //End













  
  
  
  


  //Only Home Page Boxes
  $('.bookingWidgetBoxImage').insertAfter('.grid-element:eq(7)');
  $('.bookingWidgetBox').insertAfter('.grid-element:eq(8)');
  $('.lastBlogPostBox').insertAfter('.grid-element:eq(2)');
  $('.lastBlogPostBoxImage').insertAfter('.grid-element:eq(3)');










  //Home Page Slider
  $('.flexslider').flexslider({
    animation: "slide",
    slideshow: true,
    controlNav: false
  });







  //Small Booking Engine Inside Square 
  $("#booking-widget-small-frame #OT_submitWrap").append('<button class="button borderDouble button-dark [ btn--new-submit ] " id="gtm-elementId">Book A Table</button>');
  
  $("input#startDate").addClass('datepicker');
  $("#OT_searchWrapper .imgCal").css("visibility", "hidden");



  
  
  //Booking Widget Datepicker
  $('.datepicker').pickadate({
    format: 'dd/mm/yyyy',
    formatSubmit: 'dd/mm/yyyy',
    hiddenName: true,
    close: '',
    weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
    showMonthsShort: true
  });
  //End













  //Booking in Book a table page 
  $("#booking-widget-book-a-table-page #OT_submitWrap").append('<button class="button borderDouble button-dark [ btn--new-submit ] " id="gtm-elementId">Book A Table</button>');
  
  $("input#startDate").addClass('datepicker');
  $("#OT_searchWrapper .imgCal").css("visibility", "hidden");



  
  
  //Booking Widget Datepicker
  $('.datepicker').pickadate({
    format: 'dd/mm/yyyy',
    formatSubmit: 'dd/mm/yyyy',
    hiddenName: true,
    close: '',
    weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
    showMonthsShort: true
  });
  //End






  




  // Gallery Pages
  $('#js-gallery').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    gallery:{ enabled:true }
  });
  //End




  //Blog Recurring Events Select
  $('.js-sidebar-events__ul').tinyNav({header: 'Option'});
  //End

  //Blog Categories Select
  $('.js-sidebar-categories__ul').tinyNav({header: 'Option'});
  //End




















})(jQuery);













//Newsletter Validation
function validate_signup(frm) {

  var emailAddress = frm.EmailAddress.value;
  var errorString = '';

  if (emailAddress === '' || emailAddress.indexOf('@') == -1) {
    errorString = 'Please enter your email address';
  }

  var els = frm.getElementsByTagName('input');

  for (var i = 0; i < els.length; i++) {
    if (els[i].className == 'text') {
      if (els[i].value === '') {
        errorString = 'Please complete all required fields.';
      }
    } 
  }

  var isError = false;
  
  if (errorString.length > 0)
    isError = true;

  if (isError)
    alert(errorString);
  return !isError;

}
//End 