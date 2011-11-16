<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  	
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
	
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!-- Schema.org Description -->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	  
  	<!-- Setting favicon and Apple Touch Icon -->
  	<link rel="apple-touch-icon" href="<?php bloginfo ("template_url");?>/images/misc/apple-touch-icon.png">
 	<link rel="icon" type="image/png" href="<?php bloginfo ("template_url"); ?>/images/misc/favicon.ico">
 	
 	<!-- Apple Developer Options -->
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
 	<meta name="apple-mobile-web-app-capable" content="yes">
 	  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="<?php bloginfo ("stylesheet_url"); ?>">

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Orbit IE Settings -->
	<!--[if IE]>
    <style type="text/css">
         .timer { display: none !important; }
         div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
    </style>
	<![endif]-->
	
	<?php wp_head(); ?>

</head>
<body>
