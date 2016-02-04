<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<!--  Meta description will be added by Yoast WordPress SEO plugin -->
  
	<!-- favicon.ico and apple-touch-icon -->
  <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
  <link rel="apple-touch-icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="HandheldFriendly" content="True"> <!-- For older dumb phones. Palm and Blackberries -->
  <meta name="MobileOptimized" content="320"> <!-- Older "Windows Mobile" Phones -->
  <meta name="apple-mobile-web-app-capable" content="yes"><!-- iOS meta tag defines whether the web application should run in full-screen mode -->  
  <meta name="format-detection" content="telephone=no"><!-- Prevent iOS to change the style of a telephone number -->

  <?php wp_head(); ?>



</head>

<body <?php body_class(); ?> >

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5B7RM7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5B7RM7');</script>
<!-- End Google Tag Manager -->


<!--[if lt IE 9]>
  <p class="browsehappy">You are using an <strong>outdated</strong> and <strong>unsecure</strong> browser. Please <a href="http://browsehappy.com/ target="_blank"">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<noscript>
For full functionality of this site it is necessary to enable JavaScript.
Here are the <a href="http://www.enable-javascript.com/" target="_blank">
instructions how to enable JavaScript in your web browser</a>.
</noscript>





<?php get_template_part('partials/navigation'); ?>


<div class="u-cf max-width u-margin-lr-auto [ wrapper ]">
      

