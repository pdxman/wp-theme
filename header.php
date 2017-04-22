<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<!-- Required for Responsive-->
<meta name="viewport" content="width=device-width">

<!-- Yahoo CSS Reset -->
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<!-- google fonts -->
<link href='http://fonts.googleapis.com/css?family=Flamenco|Creepster' rel='stylesheet' type='text/css'>


<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="wrapper">

	<div id="header">
	
		<h1 class="title"><a href="/index.php"><?php bloginfo( 'name' ); ?></a></h1>	
	
		<div id="menu"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></div>
	
		<div style="clear:none;"></div>

	<!--close header-->
	</div>