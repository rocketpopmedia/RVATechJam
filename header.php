<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<meta name="viewport" content="width=device-width">	

	<!--[if IE]>
      <link href="/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
  	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_enqueue_script('loadup_scripts'); ?>

	<?php wp_head(); ?>

	
</head>

<body <?php body_class(); ?>>
	