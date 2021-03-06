<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>

		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>
		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/flexslider.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.flexslider.js"></script>
		<!-- Place in the <head>, after the three links -->
		<script type="text/javascript" charset="utf-8">
		  $(window).load(function() {
		    $('.flexslider').flexslider();
		  });
		</script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<svg xmlns="http://www.w3.org/2000/svg" style="display:block;width:0;height:0;">
			<defs>
				<filter id="grayscale">
				 <feColorMatrix result="base" in="SourceGraphic" type="matrix"
					 values="0 1 0 0 0
									 0 1 0 0 0
									 0 1 0 0 0
									 0      0      0      1 0"/>
				 </feColorMatrix>
				</filter>
			</defs>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" style="display:block;width:0;height:0;">
			<defs>
				<filter id="bluescale">
				 <feColorMatrix result="base" in="SourceGraphic" type="matrix"
					 values="0.3333 0.3333 0.3333 0 0
									 0.3333 0.3333 0.3333 0 0
									 0.3333 0.3333 0.3333 0 0
									 0      0      0      1 0"/>
				 </feColorMatrix>
				 <feColorMatrix color-interpolation-filters="sRGB" in="base" type="matrix"
					 values="0.00588  0        0        0 0
									 0      	0.61176  0        0 0
									 0      	0        1  0 0
									 0      	0        0        1 0 "/>
					</feColorMatrix>

				</filter>
			</defs>
		</svg>

		<div id="container">
			<div class="hero">
			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap row">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>

					<p id="logo" class="h1 col-xs-12 col-sm-2" itemscope itemtype="http://schema.org/Organization">
						<a href="<?php echo home_url(); ?>" rel="nofollow">
							<?php
								$image = get_field('logo', 'option');

									$url = $image['url'];
									$title = $image['title'];
									$alt = $image['alt'];

									// thumbnail
									$size = 'large';
									$thumb = $image['sizes'][ $size ];
									$width = $image['sizes'][ $size . '-width' ];
									$height = $image['sizes'][ $size . '-height' ]; ?>

							<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
						</a>
					</p>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>


					<nav role="navigation" class="col-xs-12 col-sm-10" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu ',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'startertheme' ),  // nav name
    					         'menu_class' => 'nav top-nav',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>
					<div id="mobile-nav">
						Menu
					</div>
				</div>

			</header>
